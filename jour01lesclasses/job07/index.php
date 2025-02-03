<?php
class Cercle {
    private $rayon;

    // Constructeur qui initialise le rayon
    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    // Méthode pour modifier le rayon
    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon;
    }

    // Méthode pour calculer la circonférence
    public function circonference() {
        return 2 * pi() * $this->rayon;
    }

    // Méthode pour calculer l'aire
    public function aire() {
        return pi() * pow($this->rayon, 2);
    }

    // Méthode pour calculer le diamètre
    public function diametre() {
        return 2 * $this->rayon;
    }

    // Méthode pour afficher les infos du cercle
    public function afficherInfos() {
        echo "Cercle de rayon : " . $this->rayon . "<br>";
        echo "Diamètre : " . $this->diametre() . "<br>";
        echo "Circonférence : " . $this->circonference() . "<br>";
        echo "Aire : " . $this->aire() . "<br><br>";
    }
}

// Création de deux cercles avec rayon 4 et 7
$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);

// Affichage des informations des cercles
echo "Informations du premier cercle :<br>";
$cercle1->afficherInfos();

echo "Informations du deuxième cercle :<br>";
$cercle2->afficherInfos();
?>