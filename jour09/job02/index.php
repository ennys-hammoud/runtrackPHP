<?php
// Connexion à la base de données
$mysqli = new mysqli('localhost', 'root', 'root', 'jour08');

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Requête SQL pour récupérer le nom et la capacité des salles
$sql = "SELECT nom, capacite FROM salles";
$result = $mysqli->query($sql);

// Vérification du résultat de la requête
if ($result->num_rows > 0) {
    // Construction du tableau HTML
    echo '<table border="1" cellpadding="10">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Nom</th>';
    echo '<th>Capacité</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Parcours des données et remplissage du tableau
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['nom']) . '</td>';
        echo '<td>' . htmlspecialchars($row['capacite']) . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'Aucune salle trouvée dans la base de données.';
}

// Fermeture de la connexion
$mysqli->close();
?>