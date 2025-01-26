<?php
session_start();

// Initialiser le compteur de visites
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

// Réinitialiser le compteur si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} elseif (isset($_POST['add'])) {
    // Incrémenter le compteur de visites si le bouton add est cliqué
    $_SESSION['nbvisites']++;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>

<body>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>
    <form method="post">
        <input type="text" name="nbvisites" value="<?php echo $_SESSION['nbvisites']; ?>">
        <button type="submit" name="add">Add</button>
        <button type="submit" name="reset">Reset</button>
    </form>
</body>

</html>