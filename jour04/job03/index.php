<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de test</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea><br><br>
        
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
