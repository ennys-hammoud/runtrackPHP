<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>"; // Multiples de 3 et 5
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>"; // Multiples de 3
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>"; // Multiples de 5
    } else {
        echo "$i<br>"; // Tous les autres nombres
    }
}
?>