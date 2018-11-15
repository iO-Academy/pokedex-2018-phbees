<?php

namespace phbees\pokedex;

class Users
{
    private $DbConnection;
    private $userId;
    private $email;

    /**
     * constructor that requires a db connection and an email and then puts them into variables
     *
     * @param \PDO $DbConnection is a db connection
     * @param Email $email is the entered email
     */
    public function __construct(\PDO $DbConnection, Email $email)
    {
        $this->DbConnection = $DbConnection;
        $this->email = '(string) $email';
    }

    /**
     * this grabs the users ID from the db if it exists and sets the objects $userId with that value
     * If there is no id matching the email then then it does not set the objects id.
     */
    public function grabIdFromDb() : void
    {
        $query=$this->DbConnection->prepare("SELECT `id` FROM `users` WHERE `email` = :email;");
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $query->bindParam(':email',$this->email);
        $query->execute();
        $result = $query->fetch();
        $this->userId = $result['id'];
    }

    /**
     * this inserts new emails into the db if they don't already exist in there and returns the id of where it was
     * inserted
     *
     * @param string, $newEmail, this is the new email that the user has entered
     *
     * @return int $newId this inserts the new email into the db
     */
    private function insertEmailToDb(string $newEmail) : int
    {
        $db = $this->DbConnection;
        $query = $db->prepare('INSERT INTO `users` (`email`) VALUES (:email);');
        $query->bindParam(':email',$newEmail);
        $query->execute();
        return $this->userId = $db->lastInsertId();
    }

    /**
     * this checks if the userId param contains an ID, if it does then the session starts.
     * If it doesnt contain an ID then it means the email doesnt exist on the db
     * and runs the function to insert it into the db then starts a session.
     */
    public function checkIfEnteredEmailExists() : void
    {
        if (empty($this->userId)) {
            $this->insertEmailToDb($this->email);
        }
        $_SESSION['login'] = 1;
        $_SESSION['id'] = $this->userId;
        header('Location: dex.php');
    }
}