<?php

function obtener_hora() {
    return date("h:i a");
}

echo "¡Hola! ¿me podrias decir que hora es? \n";
echo "¡Claro! sol las " . obtener_hora();

echo "\n";