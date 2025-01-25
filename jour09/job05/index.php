<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root"; // Remplacez par le mot de passe de votre configuration (ex. : MAMP/WAMP)
$dbname = "jour08";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Requête SQL pour récupérer les étudiants ayant moins de 18 ans
$sql = "SELECT * FROM etudiants WHERE DATEDIFF(CURDATE(), naissance) < 18 * 365.25";
$result = $conn->query($sql);

// Génération du tableau HTML
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";

    // Affichage des noms de colonnes
    while ($field = $result->fetch_field()) {
        echo "<th>" . $field->name . "</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Affichage des données
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
    echo "Aucun étudiant ayant moins de 18 ans trouvé.";
}

// Fermeture de la connexion
$conn->close();
?>