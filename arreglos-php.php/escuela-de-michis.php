<?php

$escuela = array(
    array(
        "Nombre" => "Michijose",
        "Ocupacion" => "Developer increible"
        "Color" => "Naranja con manchitas"
        "Comidas" => array(
            "Favoritas" => "Lasagna, Atun"
            "NoFavoritas" => "Fresas, Cacahuates"
        )
    ),

    array(
        "Nombre" => "Michisancio",
        "Ocupacion" => "jQuery developer"
        "Color" => "Blanco con manchitas"
        "Comidas" => array(
            "Favoritas" => "Pescadp, Pollo"
            "NoFavoritas" => "Atun"
        )
    ),

    array(
        "Nombre" => "Mr. Michi",
        "Ocupacion" => "Pro en PHP"
        "Color" => "Blanco"
        "Comidas" => array(
            "Favoritas" => "Pizza"
            "NoFavoritas" => "Pescado"
        )
    ),
    
);

$michisancio = $escuela[1];

echo "Las comidas favoritas de Michisancion son " $michisancio['Comidas']['Favoritas'];

$mr_michi = $escuela[2];
echo "El color de Mr. Michi es " . $mr_michi["Color"];

echo "\n";
