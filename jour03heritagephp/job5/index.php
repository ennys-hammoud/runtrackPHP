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

    // Surcharge de la méthode aire() pour le rectangle
    public function aire() {
        return $this->largeur * $this->hauteur;
    }
}

// Classe Cercle qui hérite de Forme
class Cercle extends Forme {
    private $radius;

    // Constructeur
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Surcharge de la méthode aire() pour le cercle
    public function aire() {
        return pi() * pow($this->radius, 2);
    }
}

// Instanciation des objets
$rectangle = new Rectangle(10, 5);
$cercle = new Cercle(7);

// Affichage des résultats
echo "L'aire du rectangle est : " . $rectangle->aire() . "\n";
echo "L'aire du cercle est : " . $cercle->aire() . "\n";

?>