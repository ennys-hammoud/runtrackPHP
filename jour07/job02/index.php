<?php
// Initialisation ou récupération du cookie
if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = intval($_COOKIE['nbvisites']) + 1; // Incrémenter le compteur
} else {
    $nbvisites = 1; // Première visite
}

// Mise à jour du cookie
setcookie('nbvisites', $nbvisites, time() + 7 * 24 * 60 * 60); // Expire dans 7 jours

// Réinitialisation si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $nbvisites = 0;
    setcookie('nbvisites', $nbvisites, time() - 3600); // Expire immédiatement
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites avec PHP et cookies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .counter {
            font-size: 2rem;
            margin: 20px 0;
        }
        button {
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Compteur de visites avec PHP et cookies</h1>
    <div class="counter">Nombre de visites : <?php echo $nbvisites; ?></div>
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>