<?php

class Email
{
    private $email;

    /**
     * Email constructor. Requires input email parameter. checks is email is valid. If it is not construction is
     * forbidden and object instantiation is not ompleted (by returning false).
     *
     * @param $email
     */
    public function __construct($email)
    {
        if ($this->emailValidate($email)) {
            $this->email = $email;
        } else {
            return false;
        }
    }

    /**Function emailValidate() validates emails based upon predefined PHP filter FILTER_VALIDATE_EMAIL
     *
     *
     * @param string $email input email address.
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