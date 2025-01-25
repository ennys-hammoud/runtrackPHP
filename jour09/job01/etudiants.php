<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Liste des Étudiants</h1>
    <?php
    // Connexion à la base de données
    $servername = "localhost"; // L'hôte (localhost dans MAMP)
    $username = "root";       // L'utilisateur (root par défaut)
    $password = "root";           // Mot de passe (vide par défaut sur MAMP)
    $dbname = "jour08";       // Nom de la base de données

    // Création de la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Connexion échouée : " . $conn->connect_error);
    }

    // Requête SQL pour récupérer les données de la table étudiants
    $sql = "SELECT * FROM etudiants";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Prénom</th>";
        echo "<th>Nom</th>";
        echo "<th>Date de Naissance</th>";
        echo "<th>Sexe</th>";
        echo "<th>Email</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        // Parcourir les résultats et les afficher
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
            echo "<td>" . htmlspecialchars($row['naissance']) . "</td>";
            echo "<td>" . htmlspecialchars($row['sexe']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p style='text-align: center;'>Aucun étudiant trouvé dans la base de données.</p>";
    }

    // Fermeture de la connexion
    $conn->close();
    ?>
</body>
</html>