<?php

	require( "includes/class.rssparser.php" );
	
	$headers = array( "blossom", "metro", "monument" );
	
	/* ----- Comparison functions ----- */
	function compareTitle( $a, $b ) {
		return strcmp( $a["title"], $b["title"] );
	}
	
	function reverseCompareDate( $x, $y ) {
		if ( strtotime( $x['date'] ) == strtotime( $y['date'] ) )
			return 0;
		else if ( strtotime( $x['date'] ) < strtotime( $y['date'] ) )
			return 1;
		else
			return -1;
	}
	
	/* ----- Refreshing Cities feed dropdown ----- */
	function buildRefreshingCities() {
		$string = "";
		$RSSParser = new RSSParser( "http://refresh-dc.org/cities/refreshing.xml" );
		
		usort( $RSSParser->items, "compareTitle" );
		
		$num_items = count( $RSSParser->items );
		$num_cols = 2;
		$first_col_length = ceil( $num_items / $num_cols );
		$counter = 1;
		
		foreach( $RSSParser->items as $item ) {
			$string .= '<li><a href="' . $item['link'] . '">' . str_replace( "Refresh ", "", $item['title'] ) . '</a></li>' . "\n";
			if ( $counter == $first_col_length )
				$string .= '</ul><ul>';
			$counter++;
		}
		
		return $string;
	}
	
	/* ----- Build list from RSS ----- */
	function buildListFromRSS( $feed ) {
		$string = "";
		$RSSParser = new RSSParser( $feed );
		
		usort( $RSSParser->items, "reverseCompareDate" );
		
		$counter = 0;
		$max = 8;
		foreach( $RSSParser->items as $item ) {
			if ( $counter < $max ) {
				$string .= '<li><a href="' . $item['link'] . '">' . $item['title'] . '</a></li>' . "\n";
				$counter++;
			} else {
				break;
			}
		}
		
		return $string;
	}

?>