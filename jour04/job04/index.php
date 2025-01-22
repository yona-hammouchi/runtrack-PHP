<body>
    <h1 style="text-align: center;">Formulaire</h1>
    <form method="POST" action="">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <h1 style="text-align: center;">Données POST reçues</h1>

    <?php if (!empty($_POST)): ?>
        <table>
            <thead>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_POST as $key => $value): ?>
                    <tr>
                        <td><?= htmlspecialchars($key) ?></td>
                        <td><?= htmlspecialchars($value) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p style="text-align: center;">Aucune donnée POST reçue.</p>
    <?php endif; ?>
</body>

</html>