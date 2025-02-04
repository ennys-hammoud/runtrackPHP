<?php
class Livre {
    // Attributs privés
    private $titre;
    private $auteur;
    private $nombrePages;
    private $disponible; // Ajout de l'attribut disponible

    // Constructeur
    public function __construct($titre, $auteur, $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombrePages($nombrePages); // Utilisation du setter pour validation
        $this->disponible = true; // Initialisation par défaut à true
    }

    // Getter pour le titre
    public function getTitre() {
        return $this->titre;
    }

    // Setter pour le titre
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    // Getter pour l'auteur
    public function getAuteur() {
        return $this->auteur;
    }

    // Setter pour l'auteur
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    // Getter pour le nombre de pages
    public function getNombrePages() {
        return $this->nombrePages;
    }

    // Setter pour le nombre de pages (validation incluse)
    public function setNombrePages($nombrePages) {
        if (is_int($nombrePages) && $nombrePages > 0) {
            $this->nombrePages = $nombrePages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.\n";
        }
    }

    // Méthode pour afficher les informations du livre
    public function afficherInfos() {
        return "Titre : " . $this->titre . ", Auteur : " . $this->auteur . ", Pages : " . $this->nombrePages . ", Disponible : " . ($this->verification() ? "Oui" : "Non");
    }

    // Méthode pour vérifier si le livre est disponible
    public function verification() {
        return $this->disponible;
    }

    // Méthode pour emprunter un livre
    public function emprunter() {
        if ($this->verification()) { // Vérification de la disponibilité sans accéder directement à l'attribut
            $this->disponible = false;
            echo "Le livre '{$this->titre}' a été emprunté.\n";
        } else {
            echo "Le livre '{$this->titre}' n'est pas disponible.\n";
        }
    }

    // Méthode pour rendre un livre
    public function rendre() {
        if (!$this->verification()) { // Vérification que le livre a bien été emprunté
            $this->disponible = true;
            echo "Le livre '{$this->titre}' a été rendu.\n";
        } else {
            echo "Le livre '{$this->titre}' n'a pas été emprunté, donc impossible de le rendre.\n";
        }
    }
}

// Création d'un livre
$livre = new Livre("1984", "George Orwell", 328);
echo $livre->afficherInfos() . "\n";

// Emprunt du livre
$livre->emprunter();
echo $livre->afficherInfos() . "\n";

// Tentative d'emprunt alors qu'il est déjà pris
$livre->emprunter();

// Rendre le livre
$livre->rendre();
echo $livre->afficherInfos() . "\n";

// Tentative de rendre un livre qui est déjà disponible
$livre->rendre();
?>