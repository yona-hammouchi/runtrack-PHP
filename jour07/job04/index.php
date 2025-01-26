<?php
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    setcookie('prenom', $_POST['prenom'], time() + 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_COOKIE['prenom'])) {
    echo "Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !";
    echo '<form method="post"><button type="submit" name="deco">Déconnexion</button></form>';
} else {
    echo '<form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
          </form>';
}
