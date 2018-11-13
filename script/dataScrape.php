<?php

/*
 * This is an API call to the pokeAPI and pulls all of the data from 151 pokemon and puts them in an array. thew sleep stops the api call half way through for 60 seconds
 *
 *
 * @result this is an array with a json string in it containing of all of the information of all of the 151 pokemon called
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
        $pokemon[] = curl_exec($curl);
    }
    curl_close($curl);
    return $pokemon;
}

grabApi();
