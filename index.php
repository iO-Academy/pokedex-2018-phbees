<?php

/*
 * This is an API call to the pokeAPI and pulls all of the data from 151 pokemon
 *
 * @param this is the number 0
 *
 * @result this is a json string of all of the information of all of the 151 pokemon called
 */
function grabApi ($number)
{
    while ($number < 151) {
        $number = $number + 1;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://pokeapi.salestock.net/api/v2/pokemon/' . $number . '/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        echo curl_exec($curl);
        curl_close($curl);
    }
}

grabApi(0);