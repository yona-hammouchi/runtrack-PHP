<?php

$jour08 = new PDO(
    'mysql:host=localhost;dbname=jour08;charset=utf8',
    'root',
    'root'
);

//prepare et exécute la requête SQL
$query = $jour08->prepare("SELECT AVG(capacite) AS capacite_moyenne FROM salles;");
$query->execute();

// Récupérer toutes les données
$salles = $query->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si des données existent
if (count($salles) > 0) {
    echo '<table border="1">';

    // Afficher le <thead> avec les noms des colonnes
    echo '<thead><tr>';
    foreach (array_keys($salles[0]) as $columnName) {
        echo '<th>' . htmlspecialchars($columnName) . '</th>';
    }
    echo '</tr></thead>';

    // Afficher le <tbody> avec les données
    echo '<tbody>';
    foreach ($salles as $salles) {
        echo '<tr>';
        foreach ($salles as $value) {
            echo '<td>' . htmlspecialchars($value) . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';

    echo '</table>';
} else {
    echo 'Aucune donnée trouvée dans la table "salles".';
}
