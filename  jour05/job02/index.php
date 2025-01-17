<?php
// Définition de la fonction bonjour
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appel de la fonction avec un exemple
bonjour(true);  // Affichera "Bonjour"
echo "<br>";
bonjour(false); // Affichera "Bonsoir"
?>