<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pair ou Impair</title>
</head>
<body>
    <h1>Vérification : Nombre Pair ou Impair</h1>

    <!-- Formulaire de type GET -->
    <form method="GET" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre" required>
        <button type="submit">Valider</button>
    </form>

    <?php
    // Vérification si le champ "nombre" est renseigné
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre']; // Récupération de la valeur entrée

        // Vérification si le nombre est pair ou impair
        if ($nombre % 2 == 0) {
            echo "<p>Nombre pair</p>";
        } else {
            echo "<p>Nombre impair</p>";
        }
    }
    ?>
</body>
</html>