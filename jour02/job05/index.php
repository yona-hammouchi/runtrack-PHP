<?php
function isPrime($num)
{
    if ($num < 2) {
        return false; // Pas un nombre premier
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // Divisible par un autre nombre
        }
    }
    return true; // C'est un nombre premier
}

for ($i = 2; $i <= 1000; $i++) {
    if (isPrime($i)) {
        echo $i . "<br>";
    }
}
