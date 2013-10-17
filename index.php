<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$print_r_pre = function ($elem) {
   print "<pre>";
   print_r($elem);
   print "</pre>";
};

$app->get('/hello/:name', function ($name) {
   echo "Hello, $name";
});

$app->get('/info/', function () use ($app, $print_r_pre) {
   print "<br>server_address: {$_SERVER['REQUEST_SCHEME']}://{$_SERVER['SERVER_NAME']}/<br>";
   $print_r_pre($app);
   print "<br><br>";
   print "EOM";
});

$app->get('/test/', function () {
   echo "TEST2!";
});

$app->get('/hello/:name', 'helloName');

function helloName($name)
{
   echo "Ime2: $name <br />";
}

$app->run();
?>