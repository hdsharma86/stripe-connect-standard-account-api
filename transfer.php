<?php

require('vendor/autoload.php');
require('config.php');

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey(API_KEY);

// Create a Charge:
$charge = \Stripe\Charge::create(array(
  "amount" => (int) (60 * 100), //USD 60.00
  "currency" => "usd",
  "source" => "tok_visa",
  "transfer_group" => "S10", // Should be order id or any unique identifier...
));

// Create a Transfer to a connected account (later):
$transfer = \Stripe\Transfer::create(array(
  "amount" => (int) (50 * 100), // USD 50.00
  "currency" => "usd",
  "destination" => "", // Add user account id here: the one we updated in redirect.php

  "transfer_group" => "S10", // Should be order id or any unique identifier...
));

echo "<pre>";
//print_r($charge);
print_r($transfer);
die;

/**
 * Stripe\Transfer Object
(
    [id] => tr_1Ejs8BBoqL8ueAyBErXo8oJ4
    [object] => transfer
    [amount] => 5000
    [amount_reversed] => 0
    [balance_transaction] => txn_1Ejs8BBoqL8ueAyBPjrgjQDb
    [created] => 1560190927
    [currency] => usd
    [description] => 
    [destination] => acct_1D2hUYLIJPrG3WfU
    [destination_payment] => py_1Ejs8BLIJPrG3WfUTtOOQE8A
    [livemode] => 
    [metadata] => Stripe\StripeObject Object
        (
        )

    [reversals] => Stripe\Collection Object
        (
            [object] => list
            [data] => Array
                (
                )

            [has_more] => 
            [total_count] => 0
            [url] => /v1/transfers/tr_1Ejs8BBoqL8ueAyBErXo8oJ4/reversals
        )

    [reversed] => 
    [source_transaction] => 
    [source_type] => card
    [transfer_group] => S10
)

 */
