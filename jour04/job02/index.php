<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des arguments $_GET</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Arguments $_GET et Valeurs</h1>

    <?php
    // Vérifier si des arguments $_GET existent
    if (!empty($_GET)) {
        echo "<table>";
        echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
        echo "<tbody>";

        // Parcourir chaque clé-valeur de $_GET
        foreach ($_GET as $key => $value) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($key) . "</td>"; // Afficher l'argument
            echo "<td>" . htmlspecialchars($value) . "</td>"; // Afficher la valeur
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p style='text-align: center;'>Aucun argument n'a été fourni dans l'URL.</p>";
    }
    ?>
</body>
</html>