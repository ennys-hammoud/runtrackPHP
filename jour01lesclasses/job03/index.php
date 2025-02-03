<?php
class Personne {
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function SePresenter() {
        return "Bonjour, je m'appelle " . $this->prenom . " " . $this->nom . ".<br>";
    }
}

// Instanciation de plusieurs personnes
$personne1 = new Personne("ennys", "hammoud");
$personne2 = new Personne("raoul", "padovanie");
$personne3 = new Personne("jean", "Paul");

// Affichage de la présentation des personnes
echo $personne1->SePresenter();
echo $personne2->SePresenter();
echo $personne3->SePresenter();
?>