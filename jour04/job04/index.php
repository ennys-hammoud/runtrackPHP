<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Data Table</title>
</head>
<body>
    <h1>Formulaire avec méthode POST</h1>
    <form method="POST" action="">
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="age">Âge :</label>
        <input type="number" name="age" id="age" required><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Vérification si $_POST contient des données
    if (!empty($_POST)) {
        echo "<h2>Tableau des données POST :</h2>";
        echo "<table border='1'>";
        echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
        echo "<tbody>";
        foreach ($_POST as $key => $value) {
            echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>Aucune donnée n'a été soumise.</p>";
    }
    ?>
</body>
</html>