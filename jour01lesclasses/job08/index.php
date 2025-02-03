<?php
class Produit {
    private $nom;
    private $prixHT;
    private $TVA;

    // Constructeur qui initialise les valeurs
    public function __construct($nom, $prixHT, $TVA) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    // Méthode pour calculer le prix TTC
    public function CalculerPrixTTC() {
        return $this->prixHT * (1 + $this->TVA / 100);
    }

    // Méthode pour modifier le nom du produit
    public function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    // Méthode pour modifier le prix HT
    public function setPrixHT($nouveauPrixHT) {
        $this->prixHT = $nouveauPrixHT;
    }

    // Méthodes pour récupérer les informations du produit
    public function getNom() {
        return $this->nom;
    }

    public function getPrixHT() {
        return $this->prixHT;
    }

    public function getTVA() {
        return $this->TVA;
    }

    public function getPrixTTC() {
        return $this->CalculerPrixTTC();
    }

    // Méthode pour retourner toutes les informations du produit sous forme de tableau
    public function afficher() {
        return [
            "Nom" => $this->nom,
            "Prix HT" => $this->prixHT,
            "TVA" => $this->TVA . "%",
            "Prix TTC" => $this->CalculerPrixTTC()
        ];
    }
}

// Création de plusieurs produits
$produit1 = new Produit("Ordinateur", 800, 20);
$produit2 = new Produit("Smartphone", 600, 20);
$produit3 = new Produit("Casque Audio", 150, 10);

// Affichage des informations des produits avant modification
echo "Informations des produits avant modification :\n";
print_r($produit1->afficher());
print_r($produit2->afficher());
print_r($produit3->afficher());

// Modification du nom et du prix des produits
$produit1->setNom("Laptop");
$produit1->setPrixHT(850);

$produit2->setNom("iPhone");
$produit2->setPrixHT(700);

$produit3->setNom("Casque Bluetooth");
$produit3->setPrixHT(180);

// Affichage des informations après modification
echo "\nInformations des produits après modification :\n";
print_r($produit1->afficher());
print_r($produit2->afficher());
print_r($produit3->afficher());
?>