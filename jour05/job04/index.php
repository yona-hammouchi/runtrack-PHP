<?php
// Définir la fonction calcule()
function calcule($num1, $operateur, $num2)
{
    switch ($operateur) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Erreur : division par zéro";
            }
        case '%':
            return $num1 % $num2;
        default:
            return "Opérateur invalide";
    }
}

// Exemple d'appel de la fonction
$resultat = calcule(10, '+', 5); // Devrait retourner 15
echo $resultat;
