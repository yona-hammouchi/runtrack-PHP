<?php
// Démarrage de la session
session_start();

// Initialisation de la liste des prénoms si elle n'existe pas déjà
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajout d'un prénom si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
        // Ajouter le prénom à la liste
        $_SESSION['prenoms'][] = htmlspecialchars(trim($_POST['prenom']));
    }

    // Réinitialisation de la liste si "reset" est soumis
    if (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = [];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Prénoms</title>
</head>

<body>
    <h1>Ajouter des prénoms</h1>

    <!-- Formulaire -->
    <form method="post" action="">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset" value="1">Réinitialiser</button>
    </form>

    <!-- Affichage des prénoms -->
    <h2>Liste des prénoms :</h2>
    <ul>
        <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
            <li><?= htmlspecialchars($prenom) ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>