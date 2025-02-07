<?php
session_start();

// Définition d'une classe Joueur
class Joueur {
    public $nom; 
    public $symbole;

    public function __construct($nom, $symbole) {
        $this->nom = $nom;
        $this->symbole = $symbole;
    }
}

// Définition de la classe Morpion
class Morpion {
    private $plateau;
    private $joueurs;
    private $indexJoueurActuel;
    private $gagnant;

    public function __construct() {
        // Initialisation du plateau vide (3x3)
        $this->plateau = array_fill(0, 3, array_fill(0, 3, null));

        // Création des joueurs avec leurs noms et symboles
        $this->joueurs = [
            new Joueur('Ennys', 'X'),
            new Joueur('Raoul', 'O')
        ];

        // Premier joueur qui commence
        $this->indexJoueurActuel = 0;
        $this->gagnant = null;
    }

    public function getJoueurActuel() {
        return $this->joueurs[$this->indexJoueurActuel];
    }

    public function jouerCoup($ligne, $colonne) {
        if ($this->plateau[$ligne][$colonne] === null && $this->gagnant === null) {
            // Placement du symbole du joueur actuel
            $this->plateau[$ligne][$colonne] = $this->getJoueurActuel()->symbole;

            // Vérification de la victoire ou du match nul
            if ($this->verifierVictoire($ligne, $colonne)) {
                $this->gagnant = $this->getJoueurActuel();
            } elseif ($this->verifierMatchNul()) {
                $this->gagnant = 'nul';
            }

            // Changement de joueur
            $this->indexJoueurActuel = 1 - $this->indexJoueurActuel;
        }
    }

    private function verifierVictoire($ligne, $colonne) {
        $symbole = $this->plateau[$ligne][$colonne];

        // Vérification des lignes et colonnes
        for ($i = 0; $i < 3; $i++) {
            if ($this->plateau[$ligne][$i] !== $symbole) break;
            if ($i == 2) return true;
        }
        for ($i = 0; $i < 3; $i++) {
            if ($this->plateau[$i][$colonne] !== $symbole) break;
            if ($i == 2) return true;
        }

        // Vérification des diagonales
        if ($ligne === $colonne) {
            for ($i = 0; $i < 3; $i++) {
                if ($this->plateau[$i][$i] !== $symbole) break;
                if ($i == 2) return true;
            }
        }
        if ($ligne + $colonne === 2) {
            for ($i = 0; $i < 3; $i++) {
                if ($this->plateau[$i][2 - $i] !== $symbole) break;
                if ($i == 2) return true;
            }
        }
        
        return false;
    }

    private function verifierMatchNul() {
        foreach ($this->plateau as $ligne) {
            if (in_array(null, $ligne, true)) {
                return false;
            }
        }
        return true;
    }

    public function getPlateau() {
        return $this->plateau;
    }

    public function getGagnant() {
        return $this->gagnant;
    }

    public function reinitialiserJeu() {
        $_SESSION['jeu'] = new Morpion();
    }
}

// Initialisation du jeu
if (!isset($_SESSION['jeu']) || !($_SESSION['jeu'] instanceof Morpion)) {
    $_SESSION['jeu'] = new Morpion();
}
$jeu = $_SESSION['jeu'];

if (isset($_POST['coup'])) {
    list($ligne, $colonne) = explode('-', $_POST['coup']);
    $jeu->jouerCoup($ligne, $colonne);
}
if (isset($_POST['reset'])) {
    $jeu->reinitialiserJeu();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion - Ennys vs Raoul</title>
    <style>
        body { text-align: center; font-family: Arial, sans-serif; }
        .conteneur { max-width: 600px; margin: auto; }
        .intro { font-size: 1.2rem; margin-bottom: 20px; }
        .grille { display: grid; grid-template-columns: repeat(3, 100px); gap: 5px; margin: 20px auto; }
        .grille button { width: 100px; height: 100px; font-size: 2rem; cursor: pointer; }
        .message { font-size: 1.2rem; margin: 20px 0; font-weight: bold; }
        .reset { padding: 10px 20px; font-size: 1rem; cursor: pointer; }
    </style>
</head>
<body>

    <div class="conteneur">
        <!-- Présentation -->
        <h1>Morpion : Ennys vs Raoul</h1>
        <p class="intro">
            Bienvenue sur le jeu du Morpion développé par <b>Ennys</b> et <b>Raoul</b> ! <br>
            Jouez à tour de rôle et essayez de gagner en alignant trois symboles identiques. Bonne chance !
        </p>

        <!-- Zone de message (affichage du joueur actuel ou du gagnant) -->
        <div class="message">
            <?php
            $gagnant = $jeu->getGagnant();
            if ($gagnant !== null) {
                echo $gagnant === 'nul' ? "Match nul !" : "🎉 Félicitations, {$gagnant->nom} a gagné ! 🎉";
            } else {
                echo "C'est au tour de " . $jeu->getJoueurActuel()->nom . ".";
            }
            ?>
        </div>

        <!-- Affichage de la grille du jeu -->
        <form method="POST">
            <div class="grille">
                <?php
                foreach ($jeu->getPlateau() as $ligneIndex => $ligne) {
                    foreach ($ligne as $colonneIndex => $case) {
                        echo '<button type="submit" name="coup" value="' . $ligneIndex . '-' . $colonneIndex . '" ' . ($case !== null ? 'disabled' : '') . '>' . ($case ?: ' ') . '</button>';
                    }
                }
                ?>
            </div>
            <!-- Bouton de réinitialisation -->
            <button type="submit" name="reset" class="reset">Réinitialiser la partie</button>
        </form>
    </div>

</body>
</html>