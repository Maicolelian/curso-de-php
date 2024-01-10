<?php

$tiendita_de_cafe = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "capuccino" => 27.5,
    "mocca" => 24
);

foreach ($tiendita_de_cafe as $cafe => $precio) {

    echo "Actualmente encontre al cafe $cafe \n";

    if ($cafe == "Latte") {
        echo "encontramos a late";
        break;
    }
};

echo "\n";

foreach ($tiendita_de_cafe as $cafe => $precio) {

    if ($cafe == "Recalentado") 
        continue;

    echo "El cafe $cafe es muy rico! \n";
    
}

echo "\n";
