<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison en ASCII</title>
</head>
<body>
    <h1>Créer une maison en ASCII</h1>

    <!-- Formulaire -->
    <form method="POST" action="">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur" min="3" required>
        <br><br>
        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" min="2" required>
        <br><br>
        <button type="submit">Générer la maison</button>
    </form>

    <pre>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les dimensions du formulaire
    $largeur = (int)$_POST["largeur"];
    $hauteur = (int)$_POST["hauteur"];

    // Vérifier que les dimensions sont valides
    if ($largeur >= 3 && $hauteur >= 2) {
        // Générer le toit
        $milieu = intval($largeur / 2);
        for ($i = 0; $i <= $milieu; $i++) {
            echo str_repeat(" ", $milieu - $i);
            echo str_repeat("*", $i * 2 + 1);
            echo "\n";
        }

        // Générer les murs
        for ($i = 0; $i < $hauteur; $i++) {
            echo "|" . str_repeat(" ", $largeur - 2) . "|\n";
        }

        // Générer le sol
        echo str_repeat("-", $largeur) . "\n";
    } else {
        echo "Veuillez entrer une largeur d'au moins 3 et une hauteur d'au moins 2.";
    }
}
?>
    </pre>
</body>
</html>