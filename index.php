<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
   echo "Hello, $name";
});

$app->get('/', function () {
   echo "TEST1!";
});

$app->get('/test/', function () {
   echo "TEST2!";
});

$app->get('/hello/:name', 'helloName');

function helloName($name)
{
   echo "Ime: $name <br />";
}

$app->run();
?>