<?php

require_once __DIR__ . '/vendor/autoload.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=users','root');


$checkEmail = new \theNamespace\CheckEmail($db);

var_dump($checkEmail->grabEmailFromDb());