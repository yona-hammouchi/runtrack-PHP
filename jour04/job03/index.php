<body>
    <h1>Formulaire avec méthode POST</h1>

    <form method="POST">
        <input type="text" name="arg1" placeholder="Argument 1"><br><br>
        <input type="text" name="arg2" placeholder="Argument 2"><br><br>
        <input type="text" name="arg3" placeholder="Argument 3"><br><br>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Vérifier si $_POST contient des données et afficher le nombre d'arguments
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombreArguments = count($_POST);
        echo $nombreArguments > 0
            ? "<p>Nombre d'arguments reçus : $nombreArguments</p>"
            : "<p>Aucun argument reçu.</p>";
    }
    ?>
</body>

</html>