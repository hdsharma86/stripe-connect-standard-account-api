<?php

/**
 * Keep this file url in the stripe account as redirect uri...
 */
require('config.php');

if(isset($_REQUEST['code'])){

	$accountAccessToken = $_REQUEST['code'];
	$token_request_body = array(
		'client_secret' => API_KEY,
		'grant_type' => 'authorization_code',
		'client_id' => CLIENT_ID,
		'code' => $accountAccessToken,
	);

	$req = curl_init(TOKEN_URI);
	curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($req, CURLOPT_POST, true );
	curl_setopt($req, CURLOPT_POSTFIELDS, http_build_query($token_request_body));
	// TODO: Additional error handling
	$respCode = curl_getinfo($req, CURLINFO_HTTP_CODE);
	$response = json_decode(curl_exec($req), true);
	curl_close($req);
	

	if(!empty($response)){
		// STEP:1 Update `stripe_user_id` from response into the database next to corresponding user...
		// Further we will use this stripe_user_id to create/pay split payments..
	

		// STEP:2 Redirect user back to the index file or thankyou page as per the application flow...
	}
}

// Sample response below:
/*
Array
(
    [access_token] => sk_test_YnStwIYEJmWKBUXyBWdz33TR00n76sV9Zc
    [livemode] => 
    [refresh_token] => rt_FEKmydnk5uSRdIMYFTXwM78mYQXaq9Uhch04WACJS30oxf4S
    [token_type] => bearer
    [stripe_publishable_key] => pk_test_If4pymX58OdP5zXvuSvwxGYw00EhcvSJ9K
    [stripe_user_id] => acct_1D2hUYLIJPrG3WfU
    [scope] => read_write
)
 */