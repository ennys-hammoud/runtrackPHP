<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformations</title>
</head>
<body>
    <form method="POST">
        <label for="text">Entrez une chaîne de caractères :</label>
        <input type="text" name="text" id="text" required>
        
        <label for="transformation">Choisissez une transformation :</label>
        <select name="transformation" id="transformation" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        
        <button type="submit">Valider</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $text = $_POST['text'];
        $transformation = $_POST['transformation'];

        // Fonction "gras" : Mots commençant par une majuscule en gras
        function gras($str) {
            $words = explode(" ", $str);
            $result = "";
            foreach ($words as $word) {
                if (ctype_upper($word[0])) {
                    $result .= "<strong>$word</strong> ";
                } else {
                    $result .= "$word ";
                }
            }
            return trim($result);
        }

        // Fonction "césar" : Décale chaque caractère d'un nombre (par défaut 2)
        function cesar($str, $shift = 2) {
            $result = "";
            $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            for ($i = 0; $i < strlen($str); $i++) {
                $char = $str[$i];
                $index = strpos($alphabet, $char);
                if ($index !== false) {
                    $isUpperCase = ctype_upper($char);
                    $shiftedIndex = ($index + $shift) % ($isUpperCase ? 26 : 52);
                    $result .= $alphabet[$shiftedIndex];
                } else {
                    $result .= $char; // Si ce n'est pas une lettre, on garde tel quel
                }
            }
            return $result;
        }

        // Fonction "plateforme" : Remplace les mots finissant par "me" par "_"
        function plateforme($str) {
            $words = explode(" ", $str);
            $result = "";
            foreach ($words as $word) {
                if (substr($word, -2) === "me") {
                    $result .= "_ ";
                } else {
                    $result .= "$word ";
                }
            }
            return trim($result);
        }

        // Appliquer la transformation
        $output = "";
        switch ($transformation) {
            case 'gras':
                $output = gras($text);
                break;
            case 'cesar':
                $output = cesar($text);
                break;
            case 'plateforme':
                $output = plateforme($text);
                break;
            default:
                $output = "Transformation non valide.";
                break;
        }

        // Afficher le résultat
        echo "<h2>Résultat :</h2>";
        echo "<p>$output</p>";
    }
    ?>
</body>
</html>