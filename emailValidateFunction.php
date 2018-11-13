<?php



function emailValidate ($email) : string {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $email;
    } else {
        header('Location: http://192.168.20.20/pokedex-2018-phbees/emailValidateFunction.php?invalid_email=1');
    }
}

$email = 'email@bob.com';
var_dump(emailValidate($email));
echo '<br>';
$invalidEmail = '<script>Bob@didid.com';
var_dump(emailValidate($invalidEmail));
