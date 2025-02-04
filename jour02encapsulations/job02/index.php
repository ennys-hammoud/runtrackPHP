<?php
class Livre {
    // Attributs privés
    private $titre;
    private $auteur;
    private $nombrePages;

    // Constructeur
    public function __construct($titre, $auteur, $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombrePages($nombrePages); // Utilisation du setter pour validation
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
        return "Titre : " . $this->titre . ", Auteur : " . $this->auteur . ", Pages : " . $this->nombrePages;
    }
}

// Création d'un livre
$livre = new Livre("1984", "George Orwell", 328);
echo $livre->afficherInfos() . "\n";

// Modification des valeurs
$livre->setTitre("Animal Farm");
$livre->setAuteur("George Orwell");
$livre->setNombrePages(112); // Modification valide
echo $livre->afficherInfos() . "\n";

// Tentative de mise à jour avec une valeur invalide
$livre->setNombrePages(-5);
echo $livre->afficherInfos() . "\n";
?>