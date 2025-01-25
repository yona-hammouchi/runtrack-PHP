<?php

$jour08 = new PDO(
    'mysql:host=localhost;dbname=jour08;charset=utf8',
    'root',
    'root'
);

//prepare et exécute la requête SQL
$query = $jour08->prepare("SELECT prenom, nom, naissance 
FROM etudiants 
WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31';
");
$query->execute();

// Récupérer toutes les données
$etudiants = $query->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si des données existent
if (count($etudiants) > 0) {
    echo '<table border="1">';

    // Afficher le <thead> avec les noms des colonnes
    echo '<thead><tr>';
    foreach (array_keys($etudiants[0]) as $columnName) {
        echo '<th>' . htmlspecialchars($columnName) . '</th>';
    }
    echo '</tr></thead>';

    // Afficher le <tbody> avec les données
    echo '<tbody>';
    foreach ($etudiants as $etudiants) {
        echo '<tr>';
        foreach ($etudiants as $value) {
            echo '<td>' . htmlspecialchars($value) . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';

    echo '</table>';
} else {
    echo 'Aucune donnée trouvée dans la table "etudiants".';
}
