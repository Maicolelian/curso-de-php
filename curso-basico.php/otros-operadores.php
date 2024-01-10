<?php

// Operador de asignacion
$edad_de_jaimito = ($edad_de_pepito = 18) + 5;

echo "la edad de pepito es $edad_de_pepito \n";
echo "la edad de jaimito es $edad_de_jaimito";

// Operadores de incremento 

$contador = 1;

$contador = $contador + 1;
$contador += 1;
$contador++;

echo $contador;

/*
    +=
    -=
    *=
    /=
*/

$nombre = "carlos";
$nombre .= " " . "cuervo";

echo $nombre;

$contador = 1;
$resultado = $contador++;

echo $contador . "\n";
echo $resultado;

echo "\n";
