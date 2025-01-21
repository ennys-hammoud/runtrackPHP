<?php
// Démarrage de la session
session_start();

// Ajouter un prénom à la session si le formulaire est soumis
if (isset($_POST['submit']) && !empty($_POST['prenom'])) {
    // Initialiser la liste des prénoms si elle n'existe pas
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }
    // Ajouter le prénom à la liste
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
}

// Réinitialiser la liste si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des prénoms avec sessions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        form {
            margin: 20px 0;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 1rem;
            margin-right: 10px;
        }
        button {
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
        }
        .list {
            margin-top: 20px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <h1>Gestion des prénoms avec sessions</h1>

    <!-- Formulaire pour ajouter un prénom -->
    <form method="POST">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <button type="submit" name="submit">Ajouter</button>
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

    <!-- Affichage de la liste des prénoms -->
    <div class="list">
        <h2>Liste des prénoms :</h2>
        <?php
        if (!empty($_SESSION['prenoms'])) {
            echo '<ul>';
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo '<li>' . htmlspecialchars($prenom) . '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>Aucun prénom enregistré.</p>';
        }
        ?>
    </div>
</body>
</html>