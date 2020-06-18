<?php

session_start();

require_once("vendor/autoload.php");

Use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

require_once("admin-login.php");
require_once("admin-users.php");
require_once("admin-categories.php");
require_once("admin-products.php");
require_once("site.php");

$app->run();
?>