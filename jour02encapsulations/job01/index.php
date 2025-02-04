<?php
class Rectangle {
    // Attributs privés
    private $longueur;
    private $largeur;

    // Constructeur
    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Getter pour la longueur
    public function getLongueur() {
        return $this->longueur;
    }

    // Setter pour la longueur
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    // Getter pour la largeur
    public function getLargeur() {
        return $this->largeur;
    }

    // Setter pour la largeur
    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    // Méthode pour afficher les dimensions
    public function afficherDimensions() {
        return "Longueur : " . $this->longueur . ", Largeur : " . $this->largeur;
    }
}

// Création d'un rectangle avec longueur 10 et largeur 5
$rectangle = new Rectangle(12, 8);
echo $rectangle->afficherDimensions() . "\n";

// Modification des valeurs
$rectangle->setLongueur(12);
$rectangle->setLargeur(8);

// Vérification des modifications
echo $rectangle->afficherDimensions();
?>