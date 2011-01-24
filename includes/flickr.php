<?php
	
	/* ----- Flickr functionality -----*/
	if ( !isset( $_GET['page'] ) || $_GET['page'] == "" ) $_GET['page'] = "1";
	
	$string = "";
	$params = array(
		"api_key"		=> "a8326275ec795c969d0d1567abe2239e",
		"method"		=> "flickr.groups.pools.getPhotos",
		"group_id"		=> "42734174@N00",
		"per_page"		=> "5",
		"page"			=> $_GET['page'],
		"format"		=> "php_serial"
	);
	
	$encoded_params = array();
	
	foreach( $params as $k => $v )
		$encoded_params[] = urlencode( $k ) . '=' . urlencode( $v );
	
	$url = "http://api.flickr.com/services/rest/?" . implode('&', $encoded_params);
	
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $ch, CURLOPT_TIMEOUT, 5 );
	$rsp = curl_exec( $ch );
	curl_close( $ch );
	
	$rsp_obj = unserialize( $rsp );
	
	if ( $rsp_obj != null ) {
		foreach( $rsp_obj['photos']['photo'] as $photo )
			$string .= '<li><a href="http://flickr.com/photos/' . $photo['owner'] . '/' . $photo['id'] . '" title="View photo on Flickr"><img src="http://static.flickr.com/' . $photo['server'] . '/' . $photo['id'] . '_' . $photo['secret'] . '_s.jpg' . '" alt="' . htmlentities( $photo['title'] ) . '" /></a></li>' . "\n";
	
		echo $string;
	}

?>