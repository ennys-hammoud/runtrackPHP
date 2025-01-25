<?php
// Connexion à la base de données
$mysqli = new mysqli('localhost', 'root', 'root', 'jour08');

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}

// Requête SQL pour récupérer les noms des salles et leurs étages
$sql = "SELECT salles.nom AS salle, etages.nom AS etage 
        FROM salles 
        JOIN etages ON salles.id_etage = etages.id";
$result = $mysqli->query($sql);

// Affichage du tableau HTML
echo "<table border='1'>";
echo "<thead>
        <tr>
            <th>Nom de la salle</th>
            <th>Nom de l'étage</th>
        </tr>
      </thead>";
echo "<tbody>";

if ($result->num_rows > 0) {
    // Parcours des résultats
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['salle']) . "</td>
                <td>" . htmlspecialchars($row['etage']) . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='2'>Aucun résultat trouvé</td></tr>";
}

echo "</tbody>";
echo "</table>";

// Fermeture de la connexion
$mysqli->close();
?>