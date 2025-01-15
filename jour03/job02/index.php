<?php
// Déclarez la chaîne
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcourir la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Affiche un caractère sur deux (index pair)
    if ($i % 2 == 0) {
        echo $str[$i];
    }
}
?>

<?php
function afficherUnSurDeux($chaine) {
    for ($i = 0; $i < strlen($chaine); $i++) {
        if ($i % 2 == 0) {
            echo $chaine[$i];
        }
    }
}

// Appeler la fonction avec la chaîne
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
afficherUnSurDeux($str);
?>