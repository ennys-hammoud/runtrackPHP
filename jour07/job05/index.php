<?php
session_start();

// Initialiser la grille et le joueur si ce n'est pas encore fait
if (!isset($_SESSION['grid'])) {
    resetGame();
}

// Réinitialiser la partie
if (isset($_POST['reset'])) {
    resetGame();
}

// Gérer les clics sur les cases
if (isset($_POST['cell'])) {
    $cell = $_POST['cell'];
    // Si la case est vide et qu'il n'y a pas de gagnant, on joue
    if ($_SESSION['grid'][$cell] === '-' && !isset($_SESSION['winner'])) {
        $_SESSION['grid'][$cell] = $_SESSION['currentPlayer'];
        checkWinner();
        // Changer de joueur si la partie continue
        if (!isset($_SESSION['winner'])) {
            $_SESSION['currentPlayer'] = $_SESSION['currentPlayer'] === 'X' ? 'O' : 'X';
        }
    }
}

// Fonction pour réinitialiser la partie
function resetGame() {
    $_SESSION['grid'] = array_fill(0, 9, '-'); // Grille vide
    $_SESSION['currentPlayer'] = 'X';         // X commence
    unset($_SESSION['winner']);              // Pas de gagnant
    unset($_SESSION['draw']);                // Pas de match nul
}

// Fonction pour vérifier si un joueur a gagné
function checkWinner() {
    $winningCombos = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Lignes
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Colonnes
        [0, 4, 8], [2, 4, 6]             // Diagonales
    ];

    foreach ($winningCombos as $combo) {
        if ($_SESSION['grid'][$combo[0]] !== '-' &&
            $_SESSION['grid'][$combo[0]] === $_SESSION['grid'][$combo[1]] &&
            $_SESSION['grid'][$combo[1]] === $_SESSION['grid'][$combo[2]]) {
            $_SESSION['winner'] = $_SESSION['grid'][$combo[0]];
            return;
        }
    }

    // Si toutes les cases sont remplies et pas de gagnant, match nul
    if (!in_array('-', $_SESSION['grid'], true)) {
        $_SESSION['draw'] = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            gap: 5px;
            margin: 20px auto;
            width: max-content;
        }
        .grid button {
            width: 100px;
            height: 100px;
            font-size: 1.5rem;
            cursor: pointer;
        }
        .message {
            font-size: 1.2rem;
            margin: 20px 0;
        }
        button.reset {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>

    <div class="message">
        <?php
        if (isset($_SESSION['winner'])) {
            echo "Le joueur {$_SESSION['winner']} a gagné !";
        } elseif (isset($_SESSION['draw'])) {
            echo "Match nul !";
        } else {
            echo "C'est au tour du joueur {$_SESSION['currentPlayer']}.";
        }
        ?>
    </div>

    <form method="POST">
        <div class="grid">
            <?php foreach ($_SESSION['grid'] as $index => $cell): ?>
                <button type="submit" name="cell" value="<?= $index; ?>" <?= $cell !== '-' ? 'disabled' : ''; ?>>
                    <?= htmlspecialchars($cell); ?>
                </button>
            <?php endforeach; ?>
        </div>
        <button type="submit" name="reset" class="reset">Réinitialiser la partie</button>
    </form>
</body>
</html>