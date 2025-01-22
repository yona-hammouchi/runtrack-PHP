<?php
$tableau = array(200, 204, 173, 98, 171, 404, 459);

// Parcours du tableau
foreach ($tableau as $nombre) {
    // Vérification si le nombre est pair ou impair
    if ($nombre % 2 == 0) {
        // Si le nombre est divisible par 2, il est pair
        echo $nombre . " est paire<br />";
    } else {
        // Sinon, il est impair
        echo $nombre . " est impaire<br />";
    }
}
