<?php

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://pokeapi.salestock.net/api/v2/pokemon?limit=151'
));

$result = curl_exec($curl);

curl_close($curl);

echo $result;


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