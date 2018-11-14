<?php

require_once '../../vendor/autoload.php';
try {
    $email = new theNamespace\Email($_POST['email']);
} catch (UnexpectedValueException $e){
    header('Location:http://192.168.20.20/pokedex-2018-phbees/src/public/loginPage.php?invalid_email=1');
}
$cleanEmail = '(string) $email';
$db = new PDO('mysql:host=127.0.0.1;dbname=Pokedex','root');
$users = new \theNamespace\Users($db,$email);
$d = $users->grabIdFromDb();
$users->checkIfEnteredEmailExists();
