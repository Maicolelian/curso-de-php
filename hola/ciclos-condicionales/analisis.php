<?php

$palabras = array("mar", "luna", "cielo", "sol", "estrella", "arena");

for ($i=0; $i < count($palabras); $i++) { 
    if($_REQUEST["palabra".$i] == $palabras[$i]) {
        echo "La palabra ingresada es correcta"."<br>";
    } else {
        echo "La palabra ingresada es incorrecta, la palabra correscta es: ". $palabras[$i]."<br>";
    }
}

?>