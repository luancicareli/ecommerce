<?php

Use \Hcode\Page;

$app->get('/', function() {

    $page = new Page();

    $page->setTpl("index");

});


?>
