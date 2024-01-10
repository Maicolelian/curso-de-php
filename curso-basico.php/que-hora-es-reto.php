<?php

$horas = readline("por favor, ingresa el numero de horas: ");
$minutos = readline("por favor, ingresa los minutos: ");
$segundos = readline("por favor, ingresa los segundos: ");

$tiempo_en_segundos = ($horas * 60 * 60) + ($minutos * 60) + $segundos;

