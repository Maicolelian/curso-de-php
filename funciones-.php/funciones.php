<?php

function get_pokemon() {

    $numero_aleatorio = rand(1, 5);

    switch ($numero_aleatorio) {
        case 1:
            echo "Pickachu";
            break;

        case 2:
            echo "Charmander";
            break;
        
        case 3:
            echo "Mewtwo";
            break;

        default:
            echo "Lo siento, no hay pokemon para ti :c";
    }
}

for ($i=0; $i < 20; $i++) { 
    get_pokemon();
}
  

echo "\n";