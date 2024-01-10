<?php

function clear() {
    if (PHP_OS === "WINNT") {
        system("cls");
    }
    else {
        system("clear");
    }
}

$possible_words = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto", "Baldosa", "Terremoto", "Asteroide", "Gallo", "Platzi"];

define("MAX_ATTEMPS", 6);

echo "🤓 ¡Juego del ahorcado! \n\n";

// iniciamos el juego
$choosen_word = $possible_words[ rand(0, 9) ];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $word_length, "_");
$attemps = 0;

do {

    echo "Palabra de $word_length letras \n\n";
    echo $discovered_letters . "\n\n";

    // pedimos al usuario que escriba
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    if ( str_contains($choosen_word, $player_letter) ) {
        
        // verificamos todas las ocourrencias de esta letra para reemplazarla
        $offset = 0;
        while( 
            $letter_position = strops($choosen_word, $player_letter, $offset) !== false 
        ) {
            $discovered_letters[$letter_position] = $player_letter;
            $offset = $letter_position + 1;
        }
    }
    else {

        clear();
        $attemps++;
        echo "Letra incorrecta 😤. Te quedan " . (MAX_ATTEMPS - $attemps ) . "Intentos.";
        sleep(2);
    }

    clear();

} while( $attemps < MAX_ATTEMPS && $discovered_letters != $choosen_word );

clear();

if ($attemps < MAX_ATTEMPS)
    echo "!Felicidades¡ has adivinado la palabra. 🎉 \n\n";
else
    echo "Suerte para la proxima, campeon. 😉 \n\n";

echo "La palabra es: $choosen_word\n";
echo "Tu descubriste $discovered_letters";

echo "\n";