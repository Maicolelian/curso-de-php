<?php

function concatenar($nombre, $apeliido) {
    echo $nombre.' '.$apellido;
}

concatenar("Mordecay", "Rigby");

function sumarNumeros($numeros) {
    $suma = 0;
    for ($i=0; $i < 4; $i++) { 
        $suma = $suma + $numeros[$i];
    }
    echo "La suma de llos valores del array es: ".$suma;
}
$numeros = array(1,2,3,4);
sumarNumeros($numeros);
?>