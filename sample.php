<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'vendor/autoload.php';

use ChihYuLin66\LaravelJsonHelper\Json;

$json = 'aaa';

$json = Json::encode(['a' => 'a']);

$dejson = Json::decode($json, true);


var_dump(

    app('json')->encode(['a' => 'a'])
);
