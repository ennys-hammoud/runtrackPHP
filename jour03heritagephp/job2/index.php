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

// Instanciation d'un élève
$eleve = new Eleve();

// L'élève dit bonjour et va en cours
$eleve->bonjour();
$eleve->allerEnCours();

// Redéfinition de l'âge de l'élève à 15 ans
$eleve->modifierAge(15);
$eleve->afficherAge();

// Instanciation d'un professeur de mathématiques, âgé de 40 ans
$professeur = new Professeur("Mathématiques");
$professeur->modifierAge(40);

// Le professeur dit bonjour et commence son cours
$professeur->bonjour();
$professeur->enseigner();

?>