<?php


namespace theNamespace;


class CheckEmail
{
    public $DbConnection;
    public $users;

    public function __construct($DbConnection)
    {
        $this->DbConnection = $DbConnection;
    }

    public function grabEmailFromDb()
    {
        $query=$this->DbConnection->prepare("SELECT `email` FROM `users`;");
        $query->execute();
        $result = $query->fetchAll();
        return $this->users = $result;
    }

    public function checkIfEnteredEmailExists($enteredEmail)
    {
        $users = $this->users;
        foreach ($users as $user){
            if ($user['email'] === $enteredEmail) {
                $_SESSION['login'] = 1;
                header('Location: dex.php');
            }
        }
    }
}