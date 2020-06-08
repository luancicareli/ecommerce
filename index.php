<?php

require_once("vendor/autoload.php");

Use \Slim\Slim;
Use \Hcode\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

    $page = new Hcode\Page();

    $page->setTpl("index");

});

$app->run();

?>