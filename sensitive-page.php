<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'app/bootstrap.php';

/* No DI Wizard Combo */
$mailer = new Leap\Wizard\Mailer();
$userManager = new Leap\Wizard\UserManager($mailer);
echo $userManager->register('aaa@aaa.com', 'dnsaiu');

echo '<hr>';

/* DI Wizard Combo */
$container = new DI\Container();
$userManager = $container->get('Leap\Wizard\UserManager');
echo $userManager->register('aaa@aaa.com', 'dnsaiu');

echo '<hr>';

/* DI Auth & DB */
$container = new DI\Container();
$auth = $container->get('Leap\Auth\Auth');
$result = $auth->select('aaa@aaa.com');

echo "<pre>";
print_r($result);
echo "</pre>";