<title>Formulaire de Connexion</title>

<body>
    <form method="POST" action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'John' && $password === 'Rambo') {
            echo "c’est pas ma guerre";
        } else {
            echo "votre pire cauchemar";
        }
    }
    ?>
</body>

</html>