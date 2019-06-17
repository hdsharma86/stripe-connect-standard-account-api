<?php

require('vendor/autoload.php');
require('config.php');

if(isset($_POST)){

	// STEP:1 Process user inputs and create a new user into the database...
	// Code Here...
	
	// STEP:2 Redurect user to stripe using following criteria...
	header("Location: ".AUTHORIZE_URI."?response_type=code&client_id=".CLIENT_ID."&scope=read_write");
}

function disconnectAccount(){
    $api_key = 'sk_test_N2adn9QISDR8gbKamuZJS8Q700ZXPTSeaw';
    $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_URL => 'https://connect.stripe.com/oauth/deauthorize',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HTTPHEADER => ["Authorization: Bearer $api_key"],
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => http_build_query([
        'client_id' => 'ca_FCPIHtQCxsaydtlGjKlO5pval17Gp9Y2',
        'stripe_user_id' => 'acct_SUS6Z9FgCKwVEF',
      ])
    ]);
    curl_exec($curl);
}

?>