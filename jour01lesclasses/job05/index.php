<?php
class Animal {
    private $age;
    private $prenom;

    // Constructeur initialisant l'âge à 0 et le prénom vide
    public function __construct() {
        $this->age = 0;
        $this->prenom = "";
    }

    // Méthode pour afficher l'âge de l'animal
    public function afficherAge() {
        return "L'âge de l'animal est : $this->age ans<br>";
    }

    // Méthode pour faire vieillir l'animal
    public function vieillir() {
        $this->age += 1;
    }

    // Méthode pour nommer l'animal
    public function nommer($nom) {
        $this->prenom = $nom;
    }

    // Méthode pour afficher le nom de l'animal
    public function afficherNom() {
        return "Le nom de l'animal est : $this->prenom<br>";
    }
}

// Instanciation d'un objet Animal
$monAnimal = new Animal();

// Affichage de l'âge initial
echo $monAnimal->afficherAge();

// Faire vieillir l'animal
$monAnimal->vieillir();
echo $monAnimal->afficherAge();

// Nommer l'animal
$monAnimal->nommer("Rex");
echo $monAnimal->afficherNom();
?>