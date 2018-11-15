<?php

require_once '../../vendor/autoload.php';
try {
    if(isset($_POST['email'])){
    $email = new Pokedex\Classes\Email($_POST['email']);
    } else {
        header('Location:loginPage.php?invalid_email=1');
    }
} catch (UnexpectedValueException $e){
    header('Location:loginPage.php?invalid_email=1');
}

$db = new Pokedex\Classes\MySqlConnection();
$users = new Pokedex\Classes\Users($db,$email);
$users->grabIdFromDb();
$users->checkIfEnteredEmailExists();
