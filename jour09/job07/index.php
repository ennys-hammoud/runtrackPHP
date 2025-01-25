<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root"; // Remplacez par votre mot de passe (exemple : root pour MAMP)
$dbname = "jour08";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Requête SQL pour récupérer la superficie totale des étages
$sql = "SELECT SUM(superficie) AS superficie_totale FROM etage";
$result = $conn->query($sql);

// Génération du tableau HTML
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr><th>superficie_totale</th></tr>";
    echo "</thead>";
    echo "<tbody>";

    // Affichage du résultat
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row['superficie_totale']) . "</td></tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Aucune donnée trouvée.";
}

// Fermeture de la connexion
$conn->close();
?>