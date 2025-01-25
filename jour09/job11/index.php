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

// Requête SQL pour calculer la capacité moyenne des salles
$sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";
$result = $conn->query($sql);

// Génération du tableau HTML
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>capacite_moyenne</th>"; // Nom de la colonne
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Affichage de la capacité moyenne
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['capacite_moyenne']) . "</td>";
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