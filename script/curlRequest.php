<?php

$curl = curl_init();

for ($i=1; $i<=5; $i++) {
    $number = 1;

//    curl_setopt($curl, CURLOPT_URL, 'http://pokeapi.salestock.net/api/v2/pokemon/'.  $number . '/');
//
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//
//    $results = curl_exec($curl);
//
//    curl_close($curl);
//
//    echo $results;

    $numberIteration = "$number" . "2";

    echo $numberIteration;

}





//curl_setopt($curl, CURLOPT_URL, 'http://pokeapi.salestock.net/api/v2/pokemon/1/');
//
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//
//$results = curl_exec($curl);
//
//curl_close($curl);
//
//echo $results;

//function showResults ($results) {
//    foreach ($results as $result) {
//        echo $result->name;
//    }
//}

//var_dump(json_decode($results, true));





//// Get cURL resource
//$curl = curl_init();
//// Set some options - we are passing in a useragent too here
//curl_setopt_array($curl, array(
//    CURLOPT_RETURNTRANSFER => 1,
//    CURLOPT_URL => 'http://pokeapi.salestock.net/api/v2/pokemon?limit=151',
//    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
//));
//// Send the request & save response to $resp
//$resp = curl_exec($curl);
//// Close request to clear up some resources
//curl_close($curl);
//
//echo $resp;