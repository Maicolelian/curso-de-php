<?php

$tiendita_de_cafe = array(
    "Americano" => 20,
    "Latte" => 25,
    "capuccino" => 27.5,
    "mocca" => 24
);

foreach ($tiendita_de_cafe as $price) {
    echo "El cafe en cuetion cuesta $$price USD \n";
}

echo "\n";

foreach ($tiendita_de_cafe as $cafe => $price) 
    echo "El cafe $cafe cuesta $$price USD \n";


echo "\n";