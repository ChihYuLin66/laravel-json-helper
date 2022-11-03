<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'vendor/autoload.php';

use ChihYuLin66\LaravelJsonHelper\Json;

$fruits = array("Apple", "Banana", "Orange");

$json = Json::encode($fruits);
$fs = Json::decode($json);


var_dump(
    $json,
    $fs
    // app('json')->encode(['a' => 'a'])
);
