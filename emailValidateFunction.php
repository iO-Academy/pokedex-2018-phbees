<?php
/**Function emailValidate() validates emails based upon predefined PHP filter FILTER_VALIDATE_EMAIL
 * if the email is valid it returns the email and if not it fires a redirect with a piece of get information that
 * will throw an error on the given page
 *
 * @param $email input from the POST data request made by the user
 * @return string returns a string wit a valid email or else redirects.
 */
function emailValidate ($email) : string {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $email;
    }
    return 'invalid email';
}

$email = 'email@bob.com';

//test data
var_dump(emailValidate($email));
echo '<br>';
$invalidEmail = '<script>Bob@didid.com';
var_dump(emailValidate($invalidEmail));
