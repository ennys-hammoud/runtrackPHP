<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root"; // Mettez votre mot de passe MAMP si nécessaire
$dbname = "jour08";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Requête SQL pour récupérer les étudiants dont le prénom commence par "T"
$sql = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";
$result = $conn->query($sql);

// Génération du tableau HTML
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";

    // Afficher les noms des colonnes
    while ($field = $result->fetch_field()) {
        echo "<th>" . $field->name . "</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Afficher les données
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
    echo "Aucun étudiant trouvé dont le prénom commence par 'T'.";
}

// Fermeture de la connexion
$conn->close();
?>