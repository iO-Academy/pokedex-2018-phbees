<?php

require_once __DIR__ . '/vendor/autoload.php';

$db = new PDO('mysql:host=127.0.0.1; dbname=pokedex', 'root');


$Pokemon = new \theNamespace\classes\Pokemon($db);
$Pokemon->fetchPokemonFromDatabase();
$Pokemon->displayPokemon();

?>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
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
    </div>

</body>