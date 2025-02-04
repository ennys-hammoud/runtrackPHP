<?php
class Student {
    // Attributs privés
    private $nom;
    private $prenom;
    private $numeroEtudiant;
    private $credits;
    private $level;

    // Constructeur
    public function __construct($nom, $prenom, $numeroEtudiant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroEtudiant = $numeroEtudiant;
        $this->credits = 0; // Initialisation des crédits à 0
        $this->level = $this->studentEval(); // Évaluation du niveau initial
    }

    // Méthode pour ajouter des crédits
    public function addCredits($credits) {
        if ($credits > 0) {
            $this->credits += $credits;
            $this->level = $this->studentEval(); // Met à jour le niveau après modification des crédits
        } else {
            echo "Erreur : Le nombre de crédits doit être supérieur à zéro.\n";
        }
    }

    // Méthode privée pour évaluer le niveau de l'étudiant
    private function studentEval() {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    // Méthode pour afficher les informations de l'étudiant
    public function studentInfo() {
        echo "Nom : " . $this->nom . "\n";
        echo "Prénom : " . $this->prenom . "\n";
        echo "ID Étudiant : " . $this->numeroEtudiant . "\n";
        echo "Total Crédits : " . $this->credits . "\n";
        echo "Niveau : " . $this->level . "\n";
    }
}

// Instanciation de l'étudiant John Doe
$etudiant = new Student("Doe", "John", 145);

// Ajout de crédits à trois reprises
$etudiant->addCredits(10);
$etudiant->addCredits(30);
$etudiant->addCredits(25);

// Affichage des informations de l'étudiant
$etudiant->studentInfo();
?>