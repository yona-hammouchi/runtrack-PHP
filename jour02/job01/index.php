<title>Affichage des nombres</title>

<body>
    <?php
    for ($i = 0; $i <= 1337; $i++) {
        if ($i == 42) {
            echo "<strong><u>$i</u></strong><br>";
        } else {
            echo "$i<br>";
        }
    }
    ?>
</body>

</html>