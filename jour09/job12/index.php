<?php
// Connexion à la base de données
$mysqli = new mysqli('localhost', 'root', 'root', 'jour08');

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}

// Requête SQL pour récupérer les informations des étudiants nés entre 1998 et 2018
$sql = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
$result = $mysqli->query($sql);

// Affichage du tableau HTML
echo "<table border='1'>";
echo "<thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de naissance</th>
        </tr>
      </thead>";
echo "<tbody>";

if ($result->num_rows > 0) {
    // Parcours des résultats
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['prenom']) . "</td>
                <td>" . htmlspecialchars($row['nom']) . "</td>
                <td>" . htmlspecialchars($row['naissance']) . "</td>
                </tr>";
    }
} else {
    echo "<tr><td colspan='3'>Aucun résultat trouvé</td></tr>";
}

echo "</tbody>";
echo "</table>";

// Fermeture de la connexion
$mysqli->close();
?>