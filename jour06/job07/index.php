<?php
function bubblesort($tab, $croissant) {
    $n = count($tab);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($croissant) {
                // Tri croissant
                if ($tab[$j] > $tab[$j + 1]) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            } else {
                // Tri décroissant
                if ($tab[$j] < $tab[$j + 1]) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            }
        }
    }
    return $tab;
}

// Exemple d'utilisationr
$tab = ["abc", "ghi", "def"];

// Tri croissant
$result_croissant = bubblesort($tab, true);
echo "Tri croissant : ";
print_r($result_croissant);

// Tri décroissant
$result_decroissant = bubblesort($tab, false);
echo "Tri décroissant : ";
print_r($result_decroissant);
?>