<?php


namespace theNamespace\classes;


class Pokemon
{
    public $id;
    public $pokemon_name;
    public $pokemon_type;
    public $pokemon_type_2;
    public $allPokemon;
    public $dbConnection;

    /**
     * Pokemon constructor.
     * @param \PDO $db passing the database to create a property connecting the database to inside the class.
     */
    public function __construct(\PDO $db)
    {
        $this->dbConnection = $db;
    }

    /**
     * function fetches query results from database and populates class Pokemon properties.
     *
     * @return array of results from the query, the query generates an array of Assoc and indexed array of the the properties. name,id,type,type2
     */
    public function fetchPokemonFromDatabase()
    {
        $db = $this->dbConnection;
        $query = $db->prepare("SELECT `id`, `pokemon_name`, `pokemon_type`, `pokemon_type_2` FROM `pokemon`;");
        $query->setFetchMode(\PDO::FETCH_CLASS, 'Pokemon');

        $query->execute();

        $result = $query->fetchAll();
        $this->allPokemon = $result;
        return $result;
    }

    /**
     * displayPokemon will later be used to put the pokemon objects on the front end dynamically.
     *
     */
    public function displayPokemon()
    {
        $result = $this->allPokemon;
        foreach ($result as $value) {
            echo "<br>  $value[0]  <br>";
            echo "$value[1]".  '<br>';
            echo "$value[2]". '<br>';
            echo "$value[3]". '<br>';
        }
    }
}