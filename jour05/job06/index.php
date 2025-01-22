<?php
function toLeetSpeak($text)
{
    // Tableau de conversion des caractères en leet speak
    $leetMap = [
        'a' => '4',
        'A' => '4',
        'e' => '3',
        'E' => '3',
        'i' => '1',
        'I' => '1',
        'o' => '0',
        'O' => '0',
        's' => '5',
        'S' => '5',
        't' => '7',
        'T' => '7',
        'g' => '9',
        'G' => '9',
        'b' => '8',
        'B' => '8'
    ];

    // Remplacer les caractères par leur équivalent en leet speak
    $leetText = strtr($text, $leetMap);

    return $leetText;
}

// Exemple d'utilisation
echo toLeetSpeak("Hello World!");
