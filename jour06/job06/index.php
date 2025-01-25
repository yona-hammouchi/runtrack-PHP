<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Styles</title>

    <?php
    // Vérifie si un style a été sélectionné
    if (isset($_POST['style'])) {
        $style = htmlspecialchars($_POST['style']);
        echo '<link rel="stylesheet" href="style/' . $style . '.css">';
    }
    ?>
</head>

<body>
    <form method="post" action="">
        <label for="style">Choisissez un style :</label>
        <br><br>
        <select name="style" id="style">
            <option value="style0" <?php if (isset($style) && $style == 'style0') echo 'selected'; ?>>Style 0</option>
            <option value="style1" <?php if (isset($style1) && $style == 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if (isset($style) && $style == 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if (isset($style) && $style == 'style3') echo 'selected'; ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer le style</button>
    </form>
</body>

</html>