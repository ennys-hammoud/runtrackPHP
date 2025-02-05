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
    // Méthode de démarrage par défaut
    public function demarrer() {
        echo "Attention, je roule !\n";
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
    // Surcharge de la méthode demarrer()
    public function demarrer() {
        echo "La voiture démarre en douceur... Vroum Vroum !\n";
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

    // Surcharge de la méthode demarrer()
    public function demarrer() {
        echo "La moto démarre avec un rugissement... Brrrmm Brrrmm !\n";
    }
}

// Instanciation d'un objet Voiture et Moto
$maVoiture = new Voiture("Tesla", "Model 3", 2022, 45000);
$maMoto = new Moto("Yamaha", "MT-07", 2023, 8000);

// Affichage des informations et démarrage
$maVoiture->informationsVehicule();
$maVoiture->demarrer();
echo "\n";
$maMoto->informationsVehicule();
$maMoto->demarrer();

?>


