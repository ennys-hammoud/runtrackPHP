<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root"; // Remplacez par votre mot de passe (par exemple : root pour MAMP)
$dbname = "jour08";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Requête SQL pour sélectionner toutes les informations triées par capacité croissante
$sql = "SELECT * FROM salles ORDER BY capacite ASC";
$result = $conn->query($sql);

// Génération du tableau HTML
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";

    // Affichage des noms des colonnes
    while ($field = $result->fetch_field()) {
        echo "<th>" . htmlspecialchars($field->name) . "</th>";
    }

    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Affichage des données de chaque salle
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Aucune donnée trouvée.";
}

// Fermeture de la connexion
$conn->close();
?>