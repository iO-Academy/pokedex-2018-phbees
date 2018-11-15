<?php

namespace theNamespace\classes;

class Pokedex {

    public $allPokemon = [];
    private $dbConnection;

    public function __construct(\PDO $db)
    {
        $this->dbConnection = $db;
        $this->fetchPokemonFromDatabase();
    }

    /**
     * function fetches query results from database and populates class Pokemon properties.
     *
     * @return array of results from the query, the query generates an array of Assoc and indexed array of the the properties. name,id,type,type2
     */

    private function fetchPokemonFromDatabase()
    {
        $db = $this->dbConnection;
        $query = $db->prepare("SELECT `id`, `pokemon_name`, `pokemon_type`, `pokemon_type_2` FROM `pokemon`;");
        $query->setFetchMode(\PDO::FETCH_CLASS, 'Pokemon');

        $query->execute();

        $result = $query->fetchAll();
        $this->allPokemon = $result;
        var_dump($this->allPokemon);
        return $result;
    }
}