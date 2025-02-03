<?php
class Point {
    private $x;
    private $y;

    // Constructeur qui initialise les coordonnées
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour afficher les coordonnées du point
    public function afficherLesPoints() {
        return "Coordonnées du point : (x: $this->x, y: $this->y)<br>";
    }

    // Méthodes pour afficher x et y individuellement
    public function afficherX() {
        return "Valeur de X : $this->x<br>";
    }

    public function afficherY() {
        return "Valeur de Y : $this->y<br>";
    }

    // Méthodes pour modifier x et y
    public function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    public function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}

// Instanciation de l'objet Point avec des coordonnées initiales
$point1 = new Point(5, 10);

// Affichage des coordonnées initiales
echo $point1->afficherLesPoints();
echo $point1->afficherX();
echo $point1->afficherY();

// Modification des coordonnées
$point1->changerX(15);
$point1->changerY(20);

// Affichage des nouvelles coordonnées
echo $point1->afficherLesPoints();
?>