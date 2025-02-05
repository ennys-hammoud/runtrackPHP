<?php

// Classe parente Vehicule
class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;
    protected $prix;

    // Constructeur
    public function __construct($marque, $modele, $annee, $prix) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
    }

    // Méthode pour afficher les informations du véhicule
    public function informationsVehicule() {
        echo "Marque : " . $this->marque . "\n";
        echo "Modèle : " . $this->modele . "\n";
        echo "Année : " . $this->annee . "\n";
        echo "Prix : " . $this->prix . "€\n";
    }
}

// Classe Voiture qui hérite de Vehicule
class Voiture extends Vehicule {
    private $portes;

    // Constructeur avec ajout de l'attribut "portes"
    public function __construct($marque, $modele, $annee, $prix, $portes = 4) {
        parent::__construct($marque, $modele, $annee, $prix);
        $this->portes = $portes;
    }

    // Redéfinition de la méthode informationsVehicule() pour inclure le nombre de portes
    public function informationsVehicule() {
        parent::informationsVehicule();
        echo "Nombre de portes : " . $this->portes . "\n";
    }
}

// Instanciation d'un objet Voiture
$maVoiture = new Voiture("Toyota", "Corolla", 2022, 25000);

// Affichage des informations de la voiture
$maVoiture->informationsVehicule();


// Classe Moto qui hérite de Vehicule
class Moto extends Vehicule {
    private $roue;

    // Constructeur avec ajout de l'attribut "roue"
    public function __construct($marque, $modele, $annee, $prix, $roue = 2) {
        parent::__construct($marque, $modele, $annee, $prix);
        $this->roue = $roue;
    }

    // Redéfinition de la méthode informationsVehicule() pour inclure le nombre de roues
    public function informationsVehicule() {
        parent::informationsVehicule();
        echo "Nombre de roues : " . $this->roue . "\n";
    }
}

// Instanciation d'un objet Moto
$maMoto = new Moto("Yamaha", "MT-07", 2023, 8000);

// Affichage des informations de la moto
$maMoto->informationsVehicule();

?>


