<?php

require 'vendor/autoload.php';
$app = new \atk4\ui\App('Work');
$app->initLayout('Centered');
use Twilio\Rest\Client;
$app->add(['Button', 'Send testing sms'])->on('click',  function() use($app) {

  $sid = 'AC87f5a69db5064f1cb8d478ba91ecdd26';
  $token = 'd3e59dabad072a5a1a0d42c62ba9bd30';
  $client = new Client($sid, $token);

  // Use the client to do fun stuff like send text messages!
  $client->messages->create(
      // the number you'd like to send the message to
      '+37122004863',
      array(
          // A Twilio phone number you purchased at twilio.com/console
          'from' => '+371 28 914 498 ',
          // the body of the text message you'd like to send
          'body' => 'SMS text!'
      )
  );


});

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

if(isMobile()){
  echo 'Mobile';
}
else {
  echo 'PC';
}

$app->add(['ui'=>'divider']);

$bb = $app->add(['View', 'ui' => 'large blue buttons']);
foreach (str_split('ABCDE') as $letter) {
  $a = rand(1,2);
  If ($a == 1) {
       $bb->add(['Button', $letter])->on('click')->transition('fly down');
  } else {
       $bb->add(['Button', $letter])->on('click')->transition('fly up');
  }
}

$app->add(['ui'=>'divider']);

 $help=$app->add(['View', 'ui' => 'heart rating']);
 $help->js(true)->rating(['maxRating' => 10, 'initialRating' => rand(1, 10)]);
 $help->on('click',  function() use($app) {
      $_SESSION['reting'] = getRating();
      return new \atk4\ui\jsExpression('document.location = "index.php" ');
    });
