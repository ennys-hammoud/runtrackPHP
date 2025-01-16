<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test $_GET</title>
</head>
<body>
    <h1>Formulaire GET</h1>
    <!-- Formulaire de test -->
    <form method="GET" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="age">Âge :</label>
        <input type="number" id="age" name="age">
        <br>
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville">
        <br><br>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Vérification et affichage du nombre d'arguments $_GET
    if (!empty($_GET)) {
        $nb_arguments = count($_GET); // Compte le nombre d'arguments
        echo "<h2>Nombre d'arguments reçus : $nb_arguments</h2>";
    } else {
        echo "<h2>Aucun argument reçu pour l'instant.</h2>";
    }
    ?>
</body>
</html>