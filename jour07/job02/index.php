<?php

if (isset($_COOKIE['nbvisites'])) {
    // Si le cookie existe, on l'incrémente de 1
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    // Si le cookie n'existe pas, on le crée avec une valeur initiale de 1
    $nbvisites = 1;
}


if (isset($_POST['reset'])) {
    // Si le bouton reset est cliqué, on réinitialise le cookie
    setcookie('nbvisites', '', time() - 3600, "/"); // On expire le cookie
    $nbvisites = 0;
} elseif (isset($_POST['add'])) {

    $nbvisites++;
}

// Crée un cookie 'nbvisites' avec la nouvelle valeur, valable pendant 30 jours
setcookie('nbvisites', $nbvisites, time() + 30 * 24 * 60 * 60, "/");
?>

<body>

    <h1>Nombre de visites : <?php echo $nbvisites; ?></h1>

    <!-- Formulaire avec boutons reset et add -->
    <form method="post" action="">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
        <button type="submit" name="add">Ajouter</button>
    </form>

</body>

</html>