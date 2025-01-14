<?php
// Fonction pour vérifier si un nombre est premier
function estPremier($nombre) {
    if ($nombre <= 1) {
        return false; // Les nombres inférieurs ou égaux à 1 ne sont pas premiers
    }
    for ($i = 2; $i <= sqrt($nombre); $i++) {
        if ($nombre % $i == 0) {
            return false; // Si le nombre est divisible par un autre nombre, ce n'est pas premier
        }
    }
    return true; // Le nombre est premier
}

// Affiche les nombres premiers jusqu'à 1000
for ($i = 2; $i <= 1000; $i++) {
    if (estPremier($i)) {
        echo $i . "<br>"; // Affiche le nombre premier avec un retour à la ligne
    }
}
?>