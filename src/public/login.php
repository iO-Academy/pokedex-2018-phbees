<?php

require_once '../../vendor/autoload.php';
try {
    $email = new \phbees\pokedex\Email($_POST['email']);
} catch (UnexpectedValueException $e){
    header('Location:http://192.168.20.20/pokedex-2018-phbees/src/public/loginPage.php?invalid_email=1');
}

$db = new PDO('mysql:host=127.0.0.1;dbname=Pokedex','root');
$users = new \phbees\pokedex\Users($db,$email);
$users->grabIdFromDb();
$users->checkIfEnteredEmailExists();
