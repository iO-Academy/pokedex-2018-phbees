<?php

require_once '../../vendor/autoload.php';
try {
    if(isset($_POST['email'])){
    $email = new \phbees\pokedex\Email($_POST['email']);
    } else {
        header('Location:loginPage.php?invalid_email=1');
    }
} catch (UnexpectedValueException $e){
    header('Location:loginPage.php?invalid_email=1');
}

$db = new PDO('mysql:host=127.0.0.1;dbname=Pokedex','root');
$users = new \phbees\pokedex\Users($db,$email);
$users->grabIdFromDb();
$users->checkIfEnteredEmailExists();
