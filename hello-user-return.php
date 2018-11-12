<?php
	
	include('config.php');
	
	// Get the returned "authorisation code"
	$code = $_GET['code'];
	
	// URL encode the redirect URI.
	$redirect_uri_encoded = urlencode($redirect_uri);
	
	// Build a query string of POST data.
	$post_field_string = '';
	$post_field_string .= "client_secret=$client_secret";
	$post_field_string .= "&client_id=$client_id";
	$post_field_string .= "&grant_type=authorization_code";
	$post_field_string .= "&redirect_uri=$redirect_uri_encoded";
	$post_field_string .= "&code=$code";

	// POST the data to HMRC to get an access token.
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://test-api.service.hmrc.gov.uk/oauth/token');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_field_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$response = curl_exec($ch);
	curl_close ($ch);
	
	// Convert from JSON to PHP.
	$response = json_decode($response, true);

    // Check to see if we have an access token.
    if(!isset($response['access_token'])) {
        // We couldn't get an access token.
        echo 'No access token.';
    } else {
        // Try to call the API.
        $access_token = $response['access_token'];
        $headers = [
            'Accept: application/vnd.hmrc.1.0+json',
            'Authorization: Bearer ' . $access_token
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://test-api.service.hmrc.gov.uk/hello/user");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $server_output = curl_exec ($ch);
        curl_close ($ch);

        // Print what the hello user API returns.
        echo $server_output;
    }
	
