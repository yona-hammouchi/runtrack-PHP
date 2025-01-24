<title>Maison</title>

<body>
    <form method="post" action="">
        <label for="largeur">Largeur:</label>
        <input type="number" id="largeur" name="largeur" required>
        <br>
        <label for="hauteur">Hauteur:</label>
        <input type="number" id="hauteur" name="hauteur" required>
        <br>
        <input type="submit" value="Dessiner">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largeur = intval($_POST["largeur"]);
        $largeur = (int)$_POST['largeur'];
        $hauteur = intval($_POST["hauteur"]);

        if ($largeur > 0 && $hauteur > 0) {
            // Dessiner le toit
            for ($i = 0; $i < $hauteur; $i++) {
                echo str_repeat("&nbsp;", $hauteur - $i - 1);
                echo str_repeat("-", 2 * $i + 1);
                echo "<br>";
            }

            // Dessiner le corps de la maison
            for ($i = 0; $i < $hauteur; $i++) {
                echo str_repeat("|", $largeur) . "|\n";
                echo "<br>";
            }
        } else {
            echo "Veuillez entrer des valeurs positives pour la largeur et la hauteur.";
        }
    }
    ?>
</body>