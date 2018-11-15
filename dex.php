<?php

require_once __DIR__ . '/vendor/autoload.php';

$db = new PDO('mysql:host=127.0.0.1; dbname=pokedex', 'root');


$pokedex = new \theNamespace\classes\Pokedex($db);


?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
    <title>
        PokeBees- Pokedex
    </title>
</head>
<body>
<h2>PokeBees Pokedex</h2>
    <div class="container">
        <div class="poke">
            <div class="col_left">
                <div class="pokeImg">
                    <div>ID: 151</div>
                </div>
            </div>
            <div class="col_right">
                <h2>Name: x</h2>
                <h3>Type: y</h3>
                <h3>Type: y</h3>
            </div>
        </div>
        <div class="poke">
            <div class="col_left">
                <div class="pokeImg">
                    <div>ID: 151</div>
                </div>
            </div>
            <div class="col_right">
                <h2>Name: x</h2>
                <h3>Type: y</h3>
                <h3>Type: y</h3>
            </div>
        </div>
        <div class="poke">
            <div class="col_left">
                <div class="pokeImg">
                    <div>ID: 151</div>
                </div>
            </div>
            <div class="col_right">
                <h2>Name: x</h2>
                <h3>Type: y</h3>
                <h3>Type: y</h3>
            </div>
        </div>
        <div class="poke">
            <div class="col_left">
                <div class="pokeImg">
                    <div>ID: 151</div>
                </div>
            </div>
            <div class="col_right">
                <h2>Name: x</h2>
                <h3>Type: y</h3>
                <h3>Type: y</h3>
            </div>
        </div>
    </div>
</body>
</html>