<?php
class Voiture {
    // Attributs privés
    private $marque;
    private $modele;
    private $annee;
    private $kilometrage;
    private $en_marche;
    private $reservoir;

    // Constructeur
    public function __construct($marque, $modele, $annee, $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->en_marche = false;
        $this->reservoir = 50; // Initialisation du réservoir à 50 litres
    }

    // Assesseurs (getters)
    public function getMarque() {
        return $this->marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function getKilometrage() {
        return $this->kilometrage;
    }

    public function getEnMarche() {
        return $this->en_marche;
    }

    public function getReservoir() {
        return $this->reservoir;
    }

    // Mutateurs (setters)
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    public function setKilometrage($kilometrage) {
        $this->kilometrage = $kilometrage;
    }

    public function setReservoir($litres) {
        if ($litres >= 0) {
            $this->reservoir = $litres;
        } else {
            echo "Erreur : La quantité de carburant ne peut pas être négative.\n";
        }
    }

    // Méthode privée pour vérifier le niveau du réservoir
    private function verifierPlein() {
        return $this->reservoir;
    }

    // Méthode pour démarrer la voiture
    public function demarrer() {
        if ($this->verifierPlein() > 5) {
            $this->en_marche = true;
            echo "La voiture a démarré.\n";
        } else {
            echo "Carburant insuffisant pour démarrer !\n";
        }
    }

    // Méthode pour arrêter la voiture
    public function arreter() {
        $this->en_marche = false;
        echo "La voiture est arrêtée.\n";
    }

    // Méthode pour afficher les informations de la voiture
    public function afficherInfos() {
        echo "Marque : " . $this->marque . "\n";
        echo "Modèle : " . $this->modele . "\n";
        echo "Année : " . $this->annee . "\n";
        echo "Kilométrage : " . $this->kilometrage . " km\n";
        echo "Réservoir : " . $this->reservoir . " litres\n";
        echo "État : " . ($this->en_marche ? "En marche" : "À l'arrêt") . "\n";
    }
}

// Instanciation d'un objet Voiture
$voiture1 = new Voiture("Peugeot", "208", 2020, 30000);

// Affichage des informations initiales
$voiture1->afficherInfos();

// Tentative de démarrage
$voiture1->demarrer();

// Modifier le réservoir et réessayer
$voiture1->setReservoir(4);
$voiture1->demarrer();

// Remettre du carburant et redémarrer
$voiture1->setReservoir(20);
$voiture1->demarrer();

// Afficher les informations après modifications
$voiture1->afficherInfos();
?>