<body>
    <h1>Formulaire avec méthode GET</h1>
    <form method="GET">
        <input type="text" name="arg1" placeholder="Argument 1"><br><br>
        <input type="text" name="arg2" placeholder="Argument 2"><br><br>
    </form>

    <?php
    if (!empty($_GET)) {
        echo "<p>Nombre d'arguments reçus : " . count($_GET) . "</p>";
    } else {
        echo "<p>Aucun argument reçu.</p>";
    }
    ?>
</body>

</html>