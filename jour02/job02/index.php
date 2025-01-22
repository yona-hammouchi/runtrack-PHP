<title>Afficher les nombres</title>


<body>
    <?php
    // Boucle de 0 à 1337
    for ($i = 0; $i <= 1337; $i++) {

        // Vérifie si le nombre est un des exclusions
        if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
            continue; // Passe au nombre suivant
        }
        echo "$i<br>";
    }
    ?>
</body>

</html>