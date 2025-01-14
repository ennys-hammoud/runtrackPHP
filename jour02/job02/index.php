<?php
for ($i = 0; $i <= 1337; $i++) {
    // Vérifie si le nombre est dans la liste des exclus
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
        continue; // Passe au nombre suivant
    }
    echo $i . "<br>"; // Affiche le nombre suivi d'un saut de ligne HTML
}
?>