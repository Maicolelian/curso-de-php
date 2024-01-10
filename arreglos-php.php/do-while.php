<?php


do {
    echo "Esto se ejecuta por lo menos una vez";
} while( false );

echo "\n";

$usernames = ["Pepito123", "Mr.Michi", "Pinocho"];

do {
    $username = readline("Por favor ingresa tu nuevo nombre de usuario: ");

echo "\n";

} while( in_array($username, $usernames) );

echo "\n";
