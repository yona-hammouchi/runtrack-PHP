<body>
    <h1 style="text-align: center;">Arguments GET</h1>
    <form method="GET" style="text-align: center;">
        <input type="text" name="arg1" placeholder="Argument 1"><br><br>
        <input type="text" name="arg2" placeholder="Argument 2"><br><br>
        <input type="text" name="arg3" placeholder="Argument 3"><br><br>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if (!empty($_GET)) {
        echo '<table>';
        echo '<tr><th>Nom de l\'argument</th><th>Valeur</th></tr>';
        foreach ($_GET as $key => $value) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($key) . '</td>';
            echo '<td>' . htmlspecialchars($value) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<p style="text-align: center;">Aucun argument reçu.</p>';
    }
    ?>
</body>

</html>