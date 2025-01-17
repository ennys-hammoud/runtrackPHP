<?php
// Définition de la fonction occurrences
function occurrences($str, $char) {
    // Initialiser un compteur
    $count = 0;

    // Parcourir la chaîne caractère par caractère
    for ($i = 0; $i < strlen($str); $i++) {
        // Si le caractère courant correspond à $char, incrémenter le compteur
        if ($str[$i] === $char) {
            $count++;
        }
    }

    // Retourner le nombre d'occurrences
    return $count;
}

// Exemple d'utilisation
$str = "Bonjour";
$char = "o";

$result = occurrences($str, $char);
echo "Le caractère '$char' apparaît $result fois dans la chaîne '$str'.";
?>