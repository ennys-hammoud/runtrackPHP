<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion avec cookie</title>
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
    </style>
</head>
<body>
    <h1>Formulaire de connexion</h1>

    <?php if (isset($_COOKIE['prenom'])): ?>
        <!-- Message de bienvenue si le prénom est stocké dans le cookie -->
        <p>Bonjour, <?php echo htmlspecialchars($_COOKIE['prenom']); ?> !</p>
        <form method="POST">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <!-- Formulaire de connexion -->
        <form method="POST">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>

    <?php
// Gestion du cookie
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    // Ajouter le prénom dans un cookie (expire dans 7 jours)
    setcookie('prenom', htmlspecialchars($_POST['prenom']), time() + 7 * 24 * 60 * 60);
    header('Location: ' . $_SERVER['PHP_SELF']); // Recharger la page pour éviter la resoumission du formulaire
    exit();
}

// Gestion de la déconnexion
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Supprime le cookie
    header('Location: ' . $_SERVER['PHP_SELF']); // Recharger la page
    exit();
}
?>
</body>
</html>