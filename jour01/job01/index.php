<?php
// Déclaration de la variable
$str = "LaPlateforme";

// Affichage du contenu de la variable
echo $str;
?>

<?php
// Déclaration des variables pour la concaténation
$str = "LaPlateforme";
$str2 = "Vive";
$str3 = "!";

// Affichage de "Vive LaPlateforme !"
echo $str2 . " " . $str . " " . $str3 . "<br>";

// Déclaration et manipulation de la variable val
$val = 6;
echo "Valeur initiale : " . $val . "<br>";
$val += 4; // Ajout de 4
echo "Valeur après addition : " . $val . "<br>";

// Déclaration et manipulation de la variable myBool
$myBool = true;
echo "Valeur de myBool (true) : " . ($myBool ? 'true' : 'false') . "<br>";

$myBool = false;
echo "Valeur de myBool (false) : " . ($myBool ? 'true' : 'false') . "<br>";
?>