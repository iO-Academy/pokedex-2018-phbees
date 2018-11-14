<?php

/*
 * This is an API call to the pokeAPI and pulls all of the data from 151 pokemon and puts them in an array. thew sleep stops the api call half way through for 60 seconds
 *$Temp stores each Pokemon data for a limited time, allowing for the needed data to be removed and stored in pokemon before being discarded on the next loop.
 *
 * $pokemon - holds all of our pokemon, with the only data we need from each, name, type 1 and type 2.
 */

function grabApi () {
    $pokemon = [];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $i = 0;
    while ($i < 151) {
        if ($i === 75){
            sleep(60);
        }
        $i ++;
        curl_setopt($curl, CURLOPT_URL, 'https://pokeapi.co/api/v2/pokemon/' . $i . '/');
        $resp = curl_exec($curl);
        $temp = json_decode($resp, TRUE);
        $name = $temp['forms'][0]['name'];
        if (isset($temp['types'][1]['type']['name'])){
            $type1 = $temp['types'][0]['type']['name'];
            $type2 = $temp['types'][1]['type']['name'];
            $pokemon[] = [$name, $type1, $type2];
        } else {
            $type1 = $temp['types'][0]['type']['name'];
            $pokemon[] = [$name, $type1];
        }
    }
    curl_close($curl);
    return $pokemon;
}

/*
 * Allows us to insert all of our data in our DB at once. By putting each into a () we can concatinate each and then insert into the db as one large value.
 *
 *$allPokemen - the array of all the pokemon (with the only data we needed).
 *
 * $values - stores the concacinated arrays.
 * $finalValues - our concacinated arrays with an trim ob the final Pokemon to remove the final ','.
 */

function insertintodatabase($allPokemon) {
    $values = '';

    foreach ($allPokemon as $result){
        $values .= '(\'' . $result[0] . '\',';
        $values .= '\'' . $result[1] . '\',';
        if (isset($result[2])) {
           $values .= '\'' . $result[2] . '\'), ';
       } else {
           $values .= '\'' . 'NULL' . '\'), ';
       }
    }


    $finalValues = rtrim($values, ', ');
    return $finalValues;
}


/*
 * inserts our Pokemon data in the database
 * $finalValues - our concacinated arrays with an trim ob the final Pokemon to remove the final ','.
 * $db - PDO to our database;
 */

function database ($finalValues, $db){

    $query = $db->prepare("INSERT INTO `pokemon` (`pokemon_name`, `pokemon_type`, `pokemon_type_2`) VALUES " . $finalValues .";");

    return $query->execute();

}
$pokemonArray = grabApi();

$db = new PDO('mysql:host=127.0.0.1; dbname=Pokedex', 'root');

//$allPokemon = getPokeType($pokemonArray);

$finalValues = insertintodatabase($pokemonArray);

database($finalValues, $db);

