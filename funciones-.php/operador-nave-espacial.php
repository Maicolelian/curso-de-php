<?php

$precios_de_cafe = [12, 45, 64, 57, 4, 1];

usort($precios_de_cafe, function($a, $b){
    return $a <=> $b;
});

var_dump( $precios_de_cafe ); 