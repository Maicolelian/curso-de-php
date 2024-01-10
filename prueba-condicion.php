<?php

function Estudiantes($estudiante)
    foreach ($estudiante as $edades) {
        
    }

$bodega = Estudiantes, $estudiante;
$edades = array(5,6,7,);
$estudiante = "";


if ($edades > 0 && $edades < 5) {
    $bodega = "inferior";
} else if($edades >= 5 && $edades <= 7 ) {
    $bodega = "media";
} else if($edades > 7 ) {
    $bodega = "alta";
} else (
    $bodega = "de al lado";
)

switch ($bodega) {
    case inferior:
        echo "El estudiante con ".$edades." años tendra sus juguetes en la parte inferior de la bodega \n";
        break;
    case media:
        echo "El estudiante con ".$edades." años tendra sus juguetes en la parte media de la bodega \n";
        break;
    case alta:
        echo "El estudiante con ".$edades." años tendra sus juguetes en la parte alta de la bodega \n";
        break;
    default:
        echo "Los estudiantes sin registro de edad tendran sus juguetes en la bodega de al lado \n";
        break;
}

?>