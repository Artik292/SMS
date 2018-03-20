<?php

require 'vendor/autoload.php';
$app = new \atk4\ui\App ('SMS');
$app->initLayout('Centered');

$app->add(['Button', 'Send testing sms'])->on('click',  function() use($app) {

});































/*// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC87f5a69db5064f1cb8d478ba91ecdd26';
$token = 'your_auth_token';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+15558675309',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+15017250604',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    )
);
*/
