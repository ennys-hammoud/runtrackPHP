<?php

// Classe Rectangle
class Rectangle {
    private $longueur;
    private $largeur;

    // Constructeur
    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Assesseurs (Getters)
    public function getLongueur() {
        return $this->longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    // Mutateurs (Setters)
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    // Méthode pour calculer le périmètre
    public function perimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }

    // Méthode pour calculer la surface
    public function surface() {
        return $this->longueur * $this->largeur;
    }
}

// Classe Parallelepipede qui hérite de Rectangle
class Parallelepipede extends Rectangle {
    private $hauteur;

    // Constructeur
    public function __construct($longueur, $largeur, $hauteur) {
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }

    // Assesseur (Getter)
    public function getHauteur() {
        return $this->hauteur;
    }

    // Mutateur (Setter)
    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    // Méthode pour calculer le volume
    public function volume() {
        return $this->surface() * $this->hauteur;
    }
}

// Instanciation d'un rectangle
$rectangle = new Rectangle(10, 5);
echo "Périmètre du rectangle : " . $rectangle->perimetre() . "\n";
echo "Surface du rectangle : " . $rectangle->surface() . "\n";

// Instanciation d'un parallélépipède
$parallelepipede = new Parallelepipede(10, 5, 3);
echo "Volume du parallélépipède : " . $parallelepipede->volume() . "\n";

?>