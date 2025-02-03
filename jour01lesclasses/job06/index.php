<?php
class Personnage {
    private $x;
    private $y;

    // Constructeur qui initialise les coordonnées du personnage
    public function __construct($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthodes de déplacement
    public function gauche() {
        $this->x -= 1;
    }

    public function droite() {
        $this->x += 1;
    }

    public function haut() {
        $this->y -= 1;
    }

    public function bas() {
        $this->y += 1;
    }

    // Méthode pour afficher la position actuelle
    public function position() {
        return "Position actuelle : ($this->x, $this->y)<br>";
    }
}

// Instanciation d'un personnage à la position (0,0)
$joueur = new Personnage();

// Affichage de la position initiale
echo $joueur->position();

// Déplacement du personnage
$joueur->droite();
echo $joueur->position(); // (1,0)

$joueur->bas();
echo $joueur->position(); // (1,1)

$joueur->gauche();
echo $joueur->position(); // (0,1)

$joueur->haut();
echo $joueur->position(); // (0,0)
?>