<?php
	
	if ( !isset( $_POST['submit'] ) || $_POST['submit'] != "Signup" ) {
		header( "Location: http://refresh-dc.org/" );
		exit();
	} else {
	
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, "http://refreshdc.cmail1.com/s/329954/?cm-329954-329954=" . $_POST['cm-329954-329954'] );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 0 );
		$response = curl_exec( $ch );
		curl_close( $ch );
		
		$str_success = "http://refreshdc.cmail1.com/confirm/optInSubscribed.html";
		$str_failure = "http://refreshdc.cmail1.com/confirm/emailAddress.html";
		
		if ( strpos( $response, $str_success ) > 0 )
			echo "success";
		else if ( strpos( $response, $str_failure ) > 0 )
			echo "failure";
		else
			echo "catastrophe";
	}
?>