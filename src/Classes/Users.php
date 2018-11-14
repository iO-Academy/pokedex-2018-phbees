<?php


namespace theNamespace;


class Users
{
    public $DbConnection;
    public $userId;
    public $email;

    /*
     * constructor that requires a db connection and an email and then puts them into variables
     *
     * @param $DbConnection is a db connection
     *
     * @param $email is the entered email
     */
    public function __construct($DbConnection, $email)
    {
        $this->DbConnection = $DbConnection;
        $this->email = $email;
    }

    /*
     * this grabs the users ID from the db and returns it into an array
     *
     *
     *@return this sets the userId param to contain an array containing the users ID
     */
    public function grabIdFromDb()
    {
        $email = $this->email;
        $query=$this->DbConnection->prepare("SELECT `id` FROM `users` WHERE `email` = :email;");
        $query->bindParam(':email',$email);
        $query->execute();
        $result = $query->fetchAll();
        return $this->userId = $result;
    }

    /*
     * this inserts new emails into the db if they don't already exist in there
     *
     * @param $newEmail, this is the new email that the user has entered
     *
     * @return, this inserts the new email into the db
     */
    public function insertEmailToDb($newEmail)
    {
        $query=$this->DbConnection->prepare("INSERT INTO `users` (`email`) VALUES (:email);");
        $query->bindParam(':email',$newEmail);
        return $query->execute();
    }

    /*
     * this checks if the userId param contains an ID, if it does then the session starts.
     * If it doesnt contain an ID then it means the email doesnt exist on the db
     * and runs the function to insert it into the db then starts a session.
     *
     * @return runs a function to put email into db if not already and starts a session and goes to pokedex
     */
    public function checkIfEnteredEmailExists() : void
    {
        $email = $this->email;
        $id = $this->userId;
        if (empty($this->userId)) {
            $this->insertEmailToDb($email);
        }
        $_SESSION['login'] = 1;
        $_SESSION['id'] = $id;
        header('Location: dex.php');
    }
}