<?php

/* ------------------------------------------------- */
##    RSSParser
/* ------------------------------------------------- */
/* ------------------------------------------------- */
// Using the SimpleXmlElement extention built into
// PHP5, take any RSS feed and parse the contents.
//
// Author: Jamie Chung ( Chaos King )
// Email: jamie [--a.t.--] notanotherportfolio.com
/* ------------------------------------------------- */


class RSSParser {
	var $url;
	# (string) - URL of feed
	
	var $page;
	# (string) - Raw file contents of RSS Feed
	
	var $xml;
	# (object) - Object data of RSS Feed
	
	var $channel;
	# (object) - Channel Object containing feed information and items
	
	var $items;
	# (array) - RSS Items
	
	var $feed;
	# (array) - Feed Information ( title, desc, publish date )
	
	/*
	Class Constrictor
	Arguements:
	url: Feed URL, can be a local file, or online ( http:// )
	- url is required in order to execute the constrictor
	*/
	
	function __construct( $url ) {
		/*
		Do we have PHP5 Installed?
		If we do not have it installed,
		Kill the script immediately.
		*/
		if ( intval( phpversion() ) < 5 ) {
			die ( 'PHP5 is required to execute this class.' );
		}
		
		/*
		Does the extention class exist?
		Since it is an internal class
		Compiled into PHP5, we can check
		Whether it is installed or not.
		*/
		else if ( !class_exists ( 'SimpleXMLElement' ) ) {
			die ( 'Please re-compile PHP5 with the simpleXmlElement extention.' );
		}
		
		// Set the URL of the feed internally.        
		$this->setRSS ( $url );
		
		// Get the page contents of that feed.
		$this->getRSS ();
		
		// Parse RSS information
		$this->parseRSS ();
	}
	
	/*
	Function: setRSS
	Arguements:
	url - RSS Feed url which is set interally
	- url is required to run this function
	*/
	
	function setRSS ( $url ) {
		$this->url = $url;
	}
	
	/*
	Function getRSS
	- Get the feed source of the rss feed
	*/
	
	function getRSS () {
		// $this->feed = file_get_contents ( $this->url )
		
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $this->url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 0 );
		$this->feed = curl_exec( $ch );
		curl_close( $ch );
		
		// or die ( 'RSS feed was not found' );
	}
	
	/*
	Function: parseRSS
	- Parses the rss source
	- Places feed items in array: $this->items
	- Places feed details in array: $this->feed
	*/
	
	function parseRSS () {
		// Since the extention is loaded, lets create a new
		// instance of this class.
		$this->xml = new SimpleXMLElement ( $this->feed );
		
		// The XML Object has another child called channel.
		// It holds the RSS details as well as items
		$this->channel = $this->xml->channel;
		
		// Lets set the feed details
		// - Information about the RSS Feed
		$this->feed = array(
			'title' => $this->clean ( $this->channel->title ),
			'description' => $this->clean ( $this->channel->description ),
			'link' => $this->clean ( $this->channel->link ),
			'date' => $this->clean ( $this->channel->pubDate ),
			'image' => ( $this->channel->image->url ) ? $this->clean ( $this->channel->image->url ) : false,
		);
		
		// Checks if we have any items present.
		// Yes, it is possible that a feed is empty =/
		
		if ( is_object ( $this->channel->item ) && count( $this->channel->item ) ) {
			// Lets loop through all the <item> objects
			foreach ( $this->channel->item as $item ) {
				// Add an item to the array
				$this->items[] = array(
					'title' => $this->clean ( $item->title ),
					'link' => $this->clean ( $item->link ),
					'description' => $this->clean ( $item->description ),
					'category' => $this->clean ( $item->category ),
					'image' => ( $item->enclosure['url'] ) ? $this->clean ( $item->enclosure['url'] ) : false,
					'date' => $this->clean ( $item->pubDate )
				);
			}
		}
	}
	
	/*
	Function clean
	Arguments:
	i - string in which to clean.
	Cleans off the object tag from an object variable.
	*/
	
	function clean( $i ) {
		return (string) htmlspecialchars( html_entity_decode( $i ) );
	}

}

?>