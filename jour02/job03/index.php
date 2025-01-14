<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo "La Plateforme_<br>"; // Remplace 42 par "La Plateforme_"
    } elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br>"; // Affiche en italique pour les nombres entre 0 et 20
    } elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br>"; // Affiche en souligné pour les nombres entre 25 et 50
    } else {
        echo "$i<br>"; // Affiche normalement pour les autres nombres
    }
}
?>