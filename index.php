<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nikola
 * Date: 10.03.13.
 * Time: 15:28
 * To change this template use File | Settings | File Templates.
 */
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->get('/', function () {
    echo "TEST!";
});

$app->get('/test/', function () {
    echo "TEST!";
});

/*$app->get('/hello/:name', 'helloName');

function helloName($name) {
    echo "Ime: $name <br />";
}*/

$app->run();
?>