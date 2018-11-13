<?php


namespace theNamespace;

class session
{
    public function login ($userEmail,$dbEmails)
    {
        if ($userEmail === $dbEmails){
            $_SESSION['login'] = true;
            return true;
        }
        else {
            return false;
        }
    }
}