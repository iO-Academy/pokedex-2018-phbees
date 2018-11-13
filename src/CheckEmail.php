<?php


namespace theNamespace;


class CheckEmail
{
    public $DbConnection;

    public function __construct($DbConnection)
    {
        $this->DbConnection = $DbConnection;
    }

    public function grabEmailFromDb()
    {
        $query=$this->DbConnection->prepare("SELECT `email` FROM `users`;");
        $query->execute();
        return $query->fetchAll();
    }


}
