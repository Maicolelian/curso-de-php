<?php

function arbolito($pisos) {
    for ($i=0; $i<$pisos; $i++) { 
        echo str_repeat("⁕", $i ) . "<br>";
    }
}

arbolito(5);
?>