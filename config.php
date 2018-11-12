<?php

	/*
		Tutorial here:
		https://developer.service.hmrc.gov.uk/api-documentation/docs/tutorials
		
		Authorization:
		https://developer.service.hmrc.gov.uk/api-documentation/docs/authorisation/user-restricted-endpoints
		
		Settings can be obtained from the developer login here:
		https://developer.service.hmrc.gov.uk/developer/login
	*/

	// Needed for hello-user.
	$client_id = '';
	$client_secret = '';
	
	// This must be added to the application in the HMRC developer login area:
	// https://developer.service.hmrc.gov.uk/developer/login
	$redirect_uri = '';
	
	// Needed for hello-application.
	$server_token = '';
	
	// These don't need to be changed.
	$scope = 'hello';
	$state = 'state';
	
