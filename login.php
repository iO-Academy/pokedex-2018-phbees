<?php

require_once __DIR__ . '/vendor/autoload.php';

$email = $_POST['email'];

$db = new PDO('mysql:host=127.0.0.1;dbname=users','root');

$users = new \theNamespace\Users($db,$email);

$d = $users->grabIdFromDb();
$users->checkIfEnteredEmailExists();
