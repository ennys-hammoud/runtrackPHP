<?php
// Définir la chaîne
$str = "I'm sorry Dave I'm afraid I can't do that";
// Définir les voyelles (en minuscule et majuscule)
$voyelles = "aeiouAEIOU";

// Parcourir chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Si le caractère est une voyelle, on l'affiche
    if (strpos($voyelles, $str[$i]) !== false) {
        echo $str[$i];
    }
}
?>

<!-- 1.	La chaîne str : Contient le texte "I'm sorry Dave I'm afraid I can't do that".
	2.	Les voyelles vowels : Regroupe toutes les voyelles en majuscules et minuscules (aeiouAEIOU).
	3.	La boucle for : Parcourt chaque caractère de la chaîne grâce à strlen($str) pour connaître sa longueur.
	4.	La condition strpos :
	•	Vérifie si le caractère actuel est une voyelle en cherchant sa position dans la chaîne des voyelles.
	•	Si le caractère est trouvé (!== false), cela signifie qu’il s’agit d’une voyelle, donc on l’affiche. !-->