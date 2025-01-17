<?php
// Définition de la fonction occurrences
function occurrences($str, $char) {
    // Compte le nombre d'occurrences du caractère dans la chaîne
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    return $count;
}

// Exemple d'utilisation de la fonction
$str = "Hello La Plateforme!";
$char = "e";

echo "Le caractère '$char' apparaît " . occurrences($str, $char) . " fois dans la chaîne.";
?>