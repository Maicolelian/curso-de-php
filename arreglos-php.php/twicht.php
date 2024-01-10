<?php

$cantidad_donada = readline("Por favor ingresa la cantidad de donaciones acumuladas que tienes: ");

if ( $cantidad_donada >= 100) {
    echo "Tu retiro esta en preoceso...";
}
else {
    echo "Lo sentimos, solo puedes retirar despues de los 100 dolares acumulados.";
}

echo "\n";