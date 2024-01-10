<?php

$palabras = array("mar", "luna", "cielo", "sol", "estrella", "arena");

$form = "<form action='analisis.php'>";

for ($i=0; $i < count($palabras); $i++) { 
    $form .="La palabra: ".str_shuffle($palabras[$i])." ".
    "<input type='text' name='palabra".$i."'>".
    "<br>";
}

$button = "<button type='submit'>Enviar<button/>";
$formCierre = "</form>";


echo $form.$button.$formCierre;

?>