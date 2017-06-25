<?php
require 'vendor/autoload.php';


$urls = [
    'http://www.apple.com',
    'http://php.net',
    'http://sdfssdwerw.org'
];
$scanner = new \Htwu\Play\Url\Scanner($urls);
$invalidUrls = $scanner->getInvalidUrls();

print_r($invalidUrl);
