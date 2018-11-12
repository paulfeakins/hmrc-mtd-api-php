<?php

	include('config.php');
	
	// Include our server token as a header.
	$headers = [
		'Accept: application/vnd.hmrc.1.0+json',
		'Authorization: Bearer ' . $server_token
	];
	
	// Call the hello application API.
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://test-api.service.hmrc.gov.uk/hello/application");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$server_output = curl_exec ($ch);
	curl_close ($ch);

	// Print what we get.
	print  $server_output;
