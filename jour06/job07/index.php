<?php
//initie la conction avec les parametres
function bubblesort($tab, $croissant)
{
    $n = count($tab); //compte le nombre d'éléments dans le tableau

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - 1; $j++) {
            if ($croissant) {
                if ($tab[$j] > $tab[$j + 1]) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            } else {
                if ($tab[$j] < $tab[$j + 1]) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            }
        }
    }
    return $tab;
}

$tab = ["table", "cabane", "voiture", "montre", "bijoux"];

// Tri par ordre croissant
$tab_croissant = bubblesort($tab, true);
echo "Tri croissant: ";
print_r($tab_croissant);

// Tri par ordre décroissant
$tab_decroissant = bubblesort($tab, false);
echo "Tri décroissant: ";
print_r($tab_decroissant);
