<?php

	include('config.php');
	
	// Send the user to HMRC to authorize and return to hello-user-return.php with a code.
	$redirect_uri_encoded = urlencode($redirect_uri);
	$url = "https://test-api.service.hmrc.gov.uk/oauth/authorize?response_type=code&client_id=$client_id&scope=$scope&state=$state&redirect_uri=$redirect_uri_encoded";
	
	// Do this with meta refresh for debugging.
	echo 'You will be sent to: ' . $url;
	echo '<meta http-equiv="refresh" content="2;url=' . $url . '" />';
