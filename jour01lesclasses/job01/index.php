<?php
class Operation {
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1 = 5, $nombre2 = 10) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function afficher() {
        echo "Nombre 1 : " . $this->nombre1 . "<br>";
        echo "Nombre 2 : " . $this->nombre2 . "<br>";
    }
}

// Instanciation de la classe
$operation = new Operation();

// Affichage des attributs
$operation->afficher();
?>