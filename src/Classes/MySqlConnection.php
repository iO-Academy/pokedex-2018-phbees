<?php

namespace Pokedex\classes;

use Pokedex\Interfaces as Interfaces;

class MySqlConnection implements Interfaces\Db
{

    private $dbConn;

    /**
     * MySqlConnection constructor. Assigns the database to the dbConn property on instantiation
     */
    public function __construct()
    {
        $this->dbConn = new \PDO('mysql:host=127.0.0.1;dbname=pokedex','root');
    }

    /**
     * This function allows code outside the class to obtain a database connection
     * @return \PDO returns the dbConn property that had the db connection assigned to it
     */
    public function connect()
    {
        return $this->dbConn;
    }
}


