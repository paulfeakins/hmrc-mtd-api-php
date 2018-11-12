<?php

	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL,"https://test-api.service.hmrc.gov.uk/hello/world");

	$headers = [
		'Accept: application/vnd.hmrc.1.0+json'
	];

	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

	$server_output = curl_exec($ch);

	curl_close ($ch);

	print  $server_output;
