<?php

class Email
{
    private $email;
    private $valid;

    /**
     * Email constructor. Requires input email parameter. checks is email is valid. If it is not construction is
     * forbidden and object instantiation is not completed and throws an error.
     *
     * @param string $email is the input email address to be validated.
     * @throws Exception if the email is incorrect
     */
    public function __construct(string $email)
    {
        if ($this->emailValidate($email)) {
            $this->email = $email;
        } else {
            throw new Exception('Invalid email');
        }
    }

    /**
     * Function emailValidate() validates emails based upon predefined PHP filter FILTER_VALIDATE_EMAIL
     *
     * @param string $email input email address.
     *
     * @return Boolean, true if email is valid and has not special characters and false if it is invalid.
     */
    private  function emailValidate (string $email) : bool {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    /**
     * toString gives a validated email address
     *
     * @return string with the email stored.
     */
    public function __toString() : string
    {
        return $this->email;
    }
}
