<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h1>Formulaire de Connexion</h1>

    <!-- Formulaire de connexion -->
    <form method="POST" action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Se connecter</button>
    </form>

    <?php
    // Vérification si le formulaire est soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Récupération des données du formulaire
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validation des identifiants
        if ($username === "John" && $password === "Rambo") {
            echo "<p>c'est pas ma guerre</p>";
        } else {
            echo "<p>votre pire cauchemar</p>";
        }
    }
    ?>
</body>
</html>