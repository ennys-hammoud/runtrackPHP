<?php

// Classe Personne
class Personne {
    protected $age;

    public function __construct() {
        $this->age = 14;
    }

    public function afficherAge() {
        echo "J'ai " . $this->age . " ans.\n";
    }

    public function bonjour() {
        echo "Hello\n";
    }

    public function modifierAge($nouvelAge) {
        $this->age = $nouvelAge;
    }
}

// Classe Eleve qui hérite de Personne
class Eleve extends Personne {
    public function allerEnCours() {
        echo "Je vais en cours.\n";
    }

    public function afficherAge() {
        echo "J’ai " . $this->age . " ans.\n";
    }
}

// Classe Professeur
class Professeur extends Personne {
    private $matiereEnseignee;

    public function __construct($matiere) {
        parent::__construct();
        $this->matiereEnseignee = $matiere;
    }

    public function enseigner() {
        echo "Le cours de " . $this->matiereEnseignee . " va commencer.\n";
    }
}

// Instanciation de Personne et Eleve
$personne = new Personne();
$eleve = new Eleve();

// Affichage de l'âge par défaut de l'élève
$eleve->afficherAge();

?>