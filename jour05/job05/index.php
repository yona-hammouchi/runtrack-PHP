<?php

function occurrence($str, $char)
{
    $count = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) { // Vérifier si le caractère correspond
            $count++;
        }
    }

    return $count; // Retourner le nombre d'occurrences
}

$str = "La Plateforme";
$char = "o";
$resultat = occurrence($str, $char);

echo "Le nombre d'occurrences de '$char' dans '$str' est : $resultat";
