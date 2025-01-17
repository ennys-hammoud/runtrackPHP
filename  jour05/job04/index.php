<?php
// Définition de la fonction calcule
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            // Vérification pour éviter la division par zéro
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur : Division par zéro.";
            }
        case '%':
            // Vérification pour éviter le modulo par zéro
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                return "Erreur : Modulo par zéro.";
            }
        default:
            return "Erreur : Opération non valide.";
    }
}

// Exemple d'appel de la fonction
echo calcule(10, '+', 5); // Affiche 15
echo "<br>";
echo calcule(10, '/', 0); // Affiche "Erreur : Division par zéro."
?>