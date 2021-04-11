<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'app/bootstrap.php';
$config = new Leap\Config\Settings();
var_dump($config);