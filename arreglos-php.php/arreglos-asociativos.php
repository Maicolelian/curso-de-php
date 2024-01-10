<?php


$edades = array(
    "Noa" => 20;
    "Venuz" => 8;
    "Morty" => 34
);

echo "la edad de noa es " . $edades["Noa"];

echo "\n";

$cafes = array(
    "Capuccino" => 50;
    "Late" => 49;
    "Americano" => 70
);

echo "el precio del cafe Americano es de {$cafes ['Americano']}";

echo "\n";

$personas = [
    "Noa" => array(
        "edad" => 20;
        "apellido" => "Valentina"
    ),

    "Morty" => array(
        "edad" => 34;
        "apellido" => "Mordecay"
    ),
];

echo "La informacion de Noa es: Edad: " . $personas ["Noa"]["edad"] . "apellido: " . $personas["Noa"]["apellido"];

echo "\n";