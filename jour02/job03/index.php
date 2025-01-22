<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i <= 20) {
        // Nombres entre 0 et 20 en italique
        echo "<i>$i</i> <br>";
    } elseif ($i === 42) {
        // Remplace 42 par "La Plateforme_"
        echo "La Plateforme_ <br>";
    } elseif ($i >= 25 && $i <= 50) {
        // Nombres entre 25 et 50 soulignés
        echo "<u>$i</u> <br>";
    } else {
        echo "$i <br>";
    }
}
