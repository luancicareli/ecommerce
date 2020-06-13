<?php

require_once("vendor/autoload.php");

Use \Slim\Slim;
Use \Hcode\Page;
Use \Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

    $page = new Page();

    $page->setTpl("index");

});

$app->get('/admin', function() {

    $page = new PageAdmin();

    $page->setTpl("index");

});

$app->run();

?>