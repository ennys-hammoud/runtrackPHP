<?php
// Définir la chaîne initiale
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Convertir la chaîne en un tableau de caractères
$str_array = str_split($str);

// Créer une variable pour stocker le résultat
$modified_str = "";

// Parcourir le tableau et modifier chaque caractère
for ($i = 0; $i < count($str_array); $i++) {
    // Si on est au dernier caractère, on prend le premier caractère
    if ($i == count($str_array) - 1) {
        $modified_str .= $str_array[0];
    } else {
        $modified_str .= $str_array[$i + 1];
    }
}

// Afficher la chaîne modifiée
echo $modified_str;
?>