<?php

/**
 * Creates a db connection.
 *
 * @return PDO $db is the database connection.
 */
function dbConn() : PDO {
    $db = new PDO('mysql:host:127.0.0.1;dbname=pokedex', 'root');
    return $db;
}

/**
 * This is an API call to the pokeAPI and pulls all of the data from 151 pokemon and puts them in an array. The sleep stops the api call half way through for 60 seconds
 * $temp stores each Pokemon data for a limited time, allowing for the needed data to be removed and stored in pokemon before being discarded on the next loop.
 *
 * @return array $pokemon - holds all of our pokemon, with the only data we need from each, name, type 1 and type 2.
 */
function grabPokemonFromApi() : array {
    $pokemon = [];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $i = 0;
    while ($i < 151) {
        if ($i === 75){
            sleep(60);
        }
        $i++;
        curl_setopt($curl, CURLOPT_URL, 'https://pokeapi.co/api/v2/pokemon/' . $i . '/');
        $resp = curl_exec($curl);
        $temp = json_decode($resp, TRUE);
        $name = $temp['forms'][0]['name'];
        $type1 = $temp['types'][0]['type']['name'];
        if (isset($temp['types'][1]['type']['name'])) {
            $type2 = $temp['types'][1]['type']['name'];
            $pokemon[] = [$name, $type1, $type2];
        } else {
            $pokemon[] = [$name, $type1];
        }
    }
    curl_close($curl);
    return $pokemon;
}

/**
 * Allows us to insert all of our data in our DB at once. By putting each into a () we can concatenate each and then insert into the db as one large value.
 *
 * @param array $pokemonArray - the array of all the pokemon (with the only data we needed).
 *
 * @return string $finalValues - our concatenated arrays with an trim ob the final Pokemon to remove the final ','.
 */
function createSQLString(array $pokemonArray) : string {
    $values = '';
    foreach ($pokemonArray as $result) {
        $values .= '(\'' . $result[0] . '\',';
        $values .= '\'' . $result[1] . '\',';
        if (isset($result[2])) {
            $values .= '\'' . $result[2] . '\'), ';
        } else {
            $values .= ' NULL), ';
        }
    }
    return $finalValues = rtrim($values, ', ');
}

/**
 * Wipes data from the `pokemon` table of the db ready to be repopulated if updating.
 *
 * @param PDO $db is the database being looked into.
 */
function truncateTable(PDO $db) : void {
    $truncateQuery = $db->prepare('TRUNCATE TABLE `pokemon`;');
    $truncateQuery->execute();
}

/**
 * Inserts our Pokemon data in the database.
 *
 * @param string $finalValues - our concatenated arrays with an trim ob the final Pokemon to remove the final ','.
 * @param PDO $db - PDO to our database.
 *
 * @return bool - true or false if the query was able to execute or not.
 */
function insertIntoDatabase(string $finalValues, PDO $db) : bool {
    $query = $db->prepare('INSERT INTO `pokemon` (`pokemon_name`, `pokemon_type`, `pokemon_type_2`) VALUES ' . $finalValues . ' ;');
    return $query->execute();
}

$db = dbConn();

truncateTable($db);

$pokemonArray = grabPokemonFromApi();

$finalValues = createSQLString($pokemonArray);

insertIntoDatabase($finalValues, $db);
