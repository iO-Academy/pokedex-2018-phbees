<?php

namespace Pokedex\classes;

class Pokedex {

    public $allPokemon = [];
    private $dbConnection;
    public $pokemonImage = "https://pokeres.bastionbot.org/images/pokemon/";

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

    private function fetchPokemonFromDatabase() : array
    {
        $db = $this->dbConnection;
        $query = $db->prepare("SELECT `id`, `pokemon_name`, `pokemon_type`, `pokemon_type_2` FROM `pokemon`;");
        $query->setFetchMode(\PDO::FETCH_CLASS, 'Pokemon');

        $query->execute();

        $result = $query->fetchAll();
        $this->allPokemon = $result;
        return $result;
    }

    public function displayPokemon() : string
    {
        $result = '';
        foreach ($this->allPokemon as $pokemon) {
            if (
                array_key_exists('id', $pokemon) &&
                array_key_exists('pokemon_name', $pokemon) &&
                array_key_exists('pokemon_type', $pokemon)
            ) {
                $imageUrl = $this->pokemonImage . $pokemon['id'] . '.png';
                echo $imageUrl;
                    $result.= "<div class='poke'><div class='col_left'>";
                $result.= "<div class='pokeImg' style='background-image: url(\"" . $imageUrl  . "\");'>";
                $result.= '<div>' . $pokemon['id'];
                $result.= '</div></div></div>';
                $result.= "<div class='col_right'>";
                $result.= '<h2>Name: ' . $pokemon['pokemon_name'] . '</h2>';
                $result.= '<h3>Type: ' . $pokemon['pokemon_type'] . '</h3>';
                if (array_key_exists('pokemon_type_2', $pokemon)) {
                    $result .= '<h3>Type: ' . $pokemon['pokemon_type_2'] . '</h3>';
                }
                $result .='</div></div>';
            } else {
                return 'error';
            }
        }
        return $result;
    }
}

