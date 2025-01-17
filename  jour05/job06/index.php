<?php
// Définition de la fonction leetSpeak
function leetSpeak($str) {
    // Tableau associatif des caractères à convertir en leet speak
    $leet = [
        'a' => '4',
        'B' => '8',
        'e' => '3',
        'g' => '6',
        'l' => '1',
        'o' => '0',
        's' => '5',
        't' => '7'
    ];

    // Initialiser une chaîne de résultat vide
    $result = "";

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < strlen($str); $i++) {
        // Convertir en minuscule pour correspondre aux clés du tableau
        $char = strtolower($str[$i]);

        // Si le caractère existe dans le tableau, le remplacer, sinon le conserver
        $result .= $leet[$char] ?? $str[$i];
    }

    // Retourner la chaîne convertie
    return $result;
}

// Exemple d'utilisation
$texte = "Bonjour, les amis!";
echo leetSpeak($texte); // Affichera : B0nj0ur, 135 4m15!
?>