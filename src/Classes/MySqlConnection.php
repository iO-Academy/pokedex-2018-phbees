<?php

namespace Pokedex\Classes;

use Pokedex\Interfaces as Interfaces;

class MySqlConnection implements Interfaces\Db
{

    private $dbConn;

    public function __construct()
    {
        $this->dbConn = new \PDO('mysql:host=127.0.0.1;dbname=Pokedex','root');
    }

    public function connect()
    {
        return $this->dbConn;
    }
}


