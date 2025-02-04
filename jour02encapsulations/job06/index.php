<?php

class Commande {
    private int $numero_commande;
    private array $liste_plats = [];
    private string $statut = "En cours";

    public function __construct(int $numero_commande) {
        $this->numero_commande = $numero_commande;
    }

    // Ajouter un plat à la commande
    public function ajouterPlat(string $nom, float $prix): void {
        if ($this->statut === "En cours") {
            $this->liste_plats[] = ["nom" => $nom, "prix" => $prix];
            echo "Plat '{$nom}' ajouté à la commande.<br>";
        } else {
            echo "Impossible d'ajouter un plat à une commande terminée ou annulée.<br>";
        }
    }

    // Méthode privée pour calculer le total de la commande
    private function calculerTotal(): float {
        $total = 0;
        foreach ($this->liste_plats as $plat) {
            $total += $plat["prix"];
        }
        return $total;
    }

    // Calculer la TVA (20% du total)
    public function calculerTVA(): float {
        return $this->calculerTotal() * 0.20;
    }

    // Annuler une commande
    public function annulerCommande(): void {
        if ($this->statut === "En cours") {
            $this->statut = "Annulée";
            $this->liste_plats = []; // Vider la liste des plats
            echo "Commande annulée.<br>";
        } else {
            echo "Impossible d'annuler une commande déjà terminée ou annulée.<br>";
        }
    }

    // Terminer une commande
    public function terminerCommande(): void {
        if ($this->statut === "En cours") {
            $this->statut = "Terminée";
            echo "Commande terminée.<br>";
        } else {
            echo "La commande est déjà terminée ou annulée.<br>";
        }
    }

    // Afficher les informations de la commande
    public function afficherCommande(): void {
        echo "<strong>Numéro de commande :</strong> {$this->numero_commande}<br>";
        echo "<strong>Statut :</strong> {$this->statut}<br>";

        if (!empty($this->liste_plats)) {
            echo "<strong>Plats commandés :</strong><br>";
            foreach ($this->liste_plats as $plat) {
                echo "- {$plat['nom']} : {$plat['prix']} €<br>";
            }
            $total = $this->calculerTotal();
            $tva = $this->calculerTVA();
            echo "<strong>Total à payer (HT) :</strong> {$total} €<br>";
            echo "<strong>TVA (20%) :</strong> {$tva} €<br>";
            echo "<strong>Total à payer (TTC) :</strong> " . ($total + $tva) . " €<br>";
        } else {
            echo "Aucun plat commandé.<br>";
        }
        echo "<hr>";
    }
}

// Création d'une commande
$commande1 = new Commande(101);

// Ajout de plats
$commande1->ajouterPlat("Pizza Margherita", 12);
$commande1->ajouterPlat("Pâtes Carbonara", 15);

// Affichage de la commande
$commande1->afficherCommande();

// Terminer la commande
$commande1->terminerCommande();
$commande1->afficherCommande();

// Tentative d'ajouter un plat après la fin de la commande
$commande1->ajouterPlat("Tiramisu", 7);

// Création d'une deuxième commande et annulation
$commande2 = new Commande(102);
$commande2->ajouterPlat("Salade César", 10);
$commande2->annulerCommande();
$commande2->afficherCommande();

?>