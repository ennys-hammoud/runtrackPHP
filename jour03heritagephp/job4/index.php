<?php

// Classe parente Forme
class Forme {
    // Méthode aire retournant 0 par défaut
    public function aire() {
        return 0;
    }
}

// Classe Rectangle qui hérite de Forme
class Rectangle extends Forme {
    private $largeur;
    private $hauteur;

    // Constructeur
    public function __construct($largeur, $hauteur) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    // Surcharge de la méthode aire()
    public function aire() {
        return $this->largeur * $this->hauteur;
    }
}

// Instanciation d'un Rectangle
$rectangle = new Rectangle(10, 5);

// Affichage de l'aire du rectangle
echo "L'aire du rectangle est : " . $rectangle->aire() . "\n";

?>