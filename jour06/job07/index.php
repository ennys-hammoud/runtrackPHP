<?php
function bubblesort($tab, $croissant) {
    $n = count($tab);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($croissant) {
                if ($tab[$j] > $tab[$j + 1]) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            } else {
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

$tab = ["abc", "ghi", "def"];

// Tri croissant
$result_croissant = bubblesort($tab, true);
echo "<h3>Tri croissant :</h3>";
echo "<pre>";
print_r($result_croissant);
echo "</pre>";

// Tri décroissant
$result_decroissant = bubblesort($tab, false);
echo "<h3>Tri décroissant :</h3>";
echo "<pre>";
print_r($result_decroissant);
echo "</pre>";
?>