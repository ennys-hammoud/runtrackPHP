<?php
// Définition de la chaîne à analyser
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

// Dictionnaire pour les voyelles et consonnes
$dic = array(
    "consonnes" => array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z"),
    "voyelles" => array("a", "e", "i", "o", "u", "y")
);

// Variables pour stocker les comptages
$consonnes_count = 0;
$voyelles_count = 0;

// Parcours de la chaîne et comptage des voyelles et consonnes
for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); // Convertir le caractère en minuscule pour éviter les erreurs de casse
    
    if (in_array($char, $dic["voyelles"])) {
        $voyelles_count++;
    } elseif (in_array($char, $dic["consonnes"])) {
        $consonnes_count++;
    }
}

// Affichage des résultats dans un tableau HTML
echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>$voyelles_count</td><td>$consonnes_count</td></tr></tbody>";
echo "</table>";
?> 