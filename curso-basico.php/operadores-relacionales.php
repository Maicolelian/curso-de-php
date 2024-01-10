<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == Igual
var_dump( $a == $b );
var_dump( $a == $b2 );

// === Identico
var_dump( $a === $b );
var_dump( $a === $b2 );

// != Diferente
var_dump( $a != $b );
var_dump( $a != $b2 );

// !== Diferente
var_dump( $a !== $b );
var_dump( $a !== $b2 );

// < Menor que 
var_dump( $a < $b );
var_dump( $c < $b );
var_dump( $d < $b);

// > Mayor que 
var_dump( $a > $b );
var_dump( $c > $b );
var_dump( $d > $b);

echo "\n";
