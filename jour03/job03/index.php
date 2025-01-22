<?php
// Création de la chaîne
$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelles = "aeiouyAEIOUY";

for ($i = 0; $i < strlen($str); $i++) {
    // Vérifie si le caractère courant est une voyelle
    if (strpos($voyelles, $str[$i]) !== false) {
        echo $str[$i];
    }
}
