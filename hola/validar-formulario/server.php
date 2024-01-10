<?php


if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) ) {
    echo "¡hola " . $_POST['nombre'] ."!";
}
else {
    echo "no mandaste nada 😑";
}