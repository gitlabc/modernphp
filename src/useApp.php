<?php
require 'vendor/autoload.php';

$app = new Htwu\Play\BindTo\App();
$app->addRoute('/users/josh', function () {
    $this->responseContentType = 'application/json;charset=utf8';
    $this->responseBody = '{"name": "Josh"}';
});
$app->dispatch('/users/josh'. PHP_EOL);
