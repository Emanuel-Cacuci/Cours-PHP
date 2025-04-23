<h4>Exercice 1 : Créer une classe Personne</h4>

<?php

class Personne
{
    public $nom;
    public $age;

    public function __construct($a, $b)
    {
        $this->nom = $a;
        $this->age = $b;
    }

    public function sePresenter()
    {
        echo "Bonjour, je m'appelle " . $this->nom . "j'ai " . $this->age . " ans <br>";
    }
}

$per1 = new Personne(" Emanuel ", 21);
$per1->sePresenter();

?>

<h4>Exercice 2 : Classe Rectangle</h4>


<?php

class Rectangle
{
    public $longeur;
    public $largeur;

    public function __construct($a, $b)
    {
        $this->longeur = $a;
        $this->largeur = $b;
    }
    public function getSurface()
    {
        if (is_numeric($this->longeur) && is_numeric($this->largeur)) {
            echo " la surface est de $this->longeur * $this->largeur : " . $this->longeur * $this->largeur;
        } else {
            echo "Valeur non numérique";
        }
    }
}

$rectangle1 = new Rectangle(22, 32);
$rectangle1->getSurface();
?>


<h4>Exercice 3 : Créer une classe Voiture qui respecte les bonnes pratiques d'encapsulation :</h4>

<?php


// class Vehicule
// {
//   // Attributs
//   public $marque;
//   private $vitesseMax;


//   // Méthodes
//   public function __construct( $a,$b)
//   {
//     $this->setvittesmax($b);
//     $this->marque = $a;
//   }

// public function getvittesmax(){
//   return ($this->vitesseMax);
//  }

//  public function setvittesmax($d){
//     if ($d<0) {
//         echo "<p>vitese invalide</p>";
//     }
//     else{
//         echo $this->vitesseMax=$d;
//     }
//    }

// }
// $toyota = new Vehicule("toyota",-250);
// print_r($toyota) ;



class Voiture
{
    public string $marque;
    private int $vitesseMax;

    public function __construct(string $marque, int $vitesseMax)
    {
        $this->marque = $marque;
        $this->setVitesseMax($vitesseMax); // on utilise le setter pour appliquer la vérification
    }

    // Getter pour la vitesse
    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    // Setter avec vérification
    public function setVitesseMax(int $vitesse): void
    {
        if ($vitesse >= 0) {
            $this->vitesseMax = $vitesse;
        } else {
            echo "❌ Vitesse invalide. Elle doit être >= 0 km/h.<br>";
        }
    }

    public function afficherInfos(): void
    {
        echo "🚗 Marque : {$this->marque} <br>";
        echo "💨 Vitesse Max : {$this->getVitesseMax()} km/h <br>";
    }
}

// Utilisation
$voiture1 = new Voiture("Toyota", 220);
$voiture1->afficherInfos();

echo "<hr>";

// Tentative de mettre une vitesse négative
$voiture1->setVitesseMax(-50); // Ne devrait pas être acceptée
$voiture1->afficherInfos();



?>

<h4>Exercice 4 : Créer une classe Etudiant :</h4>


<?php
class Etudiant
{
    public $nom;
    private $notes;
    public function __construct($a, $b)
    {
        $this->nom = $a;
        $this->setnotes($b);
    }
    public function getnotes()
    {
        return $this->notes;
    }
    public function setnotes($c)
    {
        if (($c >= 0) && ($c <= 20)) {
            $this->notes = $c;
        } else {
            echo "note pas comprise entre 0 et 20 ❗ <br>";
        }
    }
    public function AfficherMention()
    {
        if ($this->notes >= 16) {
            echo "Mention très bien <br>";
        } elseif ($this->notes >= 14) {
            echo "Mention bien <br>";
        } elseif ($this->notes >= 12) {
            echo "Mention Assez bien <br>";
        } elseif ($this->notes >= 10) {
            echo "Mention Passable <br>";
        } else {
            echo "Echec <br>";
        }
    }
}

$Etudiant1 = new Etudiant("Nawel", 20);
var_dump($Etudiant1);
$Etudiant1->AfficherMention();
?>

<h4>Exercice 5 : Crée une classe nommée CompteBancaire...</h4>

<?php



class compteBancaire
{

    private $titulaire;
    private $solde;

    public function __construct($a, $b)
    {

        $this->setTitulaire($a);
        $this->setSolde($b);
    }


    // getter de titulaire
    public function getTitulaire()
    {

        return $this->titulaire;
    }

    // setter de titulaire
    public function setTitulaire($z)
    {

        $this->titulaire = $z;
    }

    // getter de solde

    public function getSolde()
    {
        return $this->solde;
    }

    // setter de solde

    public function setSolde($d)
    {
        if ($d <= 0) {
            echo "Erreur : le solde ne peut pas être négatif ou à 0. <br>";
        } else {
            return $this->solde = $d;
        }
    }

    public function depot($montant)
    {

        if ($montant <= 0) {
            echo "Erreur : le montant du depot ne peut pas être négatif ou à 0. <br>";
        } else {
            return $this->solde += $montant;
        }
    }

    public function retrait($montant)
    {

        if ($montant <= 0) {
            echo "Erreur : le montant du retrait ne peut pas être négatif ou à 0. <br>";
        } elseif ($this->solde < $montant) {

            echo "fond insuffisant pour effectuer le retrait";
        } else {
            return $this->solde -= $montant;
        }
    }
}


$compte1 = new compteBancaire("John", 100);

echo $compte1->getTitulaire();
echo "<br>";

echo $compte1->getSolde();

$compte2 = new compteBancaire(" Moussa", 100000);

echo $compte2->getTitulaire();
echo "<br>";

echo $compte2->getSolde();


$compte2->depot(100000);
echo "<br>";

echo $compte2->getSolde();

$compte2->retrait(200000);
echo "<br>";
echo $compte2->getSolde();
?>


<h4>Exercice 6 — Classe Livre (Sans typage)</h4>
<?php
class Livre
{

    private string $titre;
    private string $auteur;
    private int $annee;
    private bool $disponible;
    private int $nombreEmprunts = 0;

    public function __construct($a, $b, $c, $d)
    {

        $this->titre = $a;
        $this->auteur = $b;
        $this->annee = $c;
        $this->disponible = $d;
    }

    // getter de nombreEmprunts
    public function getNombreEmprunts()
    {
        return $this->nombreEmprunts;
    }

    // setter de nombreEmprunts
    public function setNombreEmprunts($e)
    {
        return $this->nombreEmprunts = $e;
    }

    // getter de titre
    public function getTitre()
    {
        return $this->titre;
    }

    // setter de titre    return
    public function setTitre($a)
    {
        return $this->titre = $a;
    }



    // getter de auteur
    public function getAuteur()
    {
        return $this->auteur;
    }

    // setter de auteur
    public function setAuteur($b)
    {
        return $this->auteur = $b;
    }



    // getter de annee
    public function getAnnee()
    {
        return $this->annee;
    }

    // setter de annee
    public function setAnnee($c)
    {
        return $this->annee = $c;
    }

    // getter de disponible
    public function getDisponible()
    {
        return $this->disponible;
    }

    // setter de disponible
    public function setDisponible($d)
    {
        return $this->disponible = $d;
    }

    // afficher les informations du livre

    public function afficherFiche()
    {

        echo "Titre : " . $this->getTitre() . "<br>";
        echo "Auteur : " . $this->getAuteur() . "<br>";
        echo "Annee : " . $this->getAnnee() . "<br>";
        echo "Disponible : " . ($this->getDisponible() ? "Oui" : "Non") . "<br>";


        echo "titre : {$this->getTitre()} auteur : {$this->getAuteur()} annee : {$this->getAnnee()} disponible : " . ($this->getDisponible() ? "Oui" : "Non");
    }

    // emprunter le livre
    public function emprunter()
    {
        if ($this->disponible) {
            echo " emprunt reussi";
            $this->nombreEmprunts++; // a chaque fois que le livre est emprunté, on incrémente le nombre d'emprunts
            return $this->setDisponible(false);
        } else {
            echo " le livre n'est pas disponible";
        }
    }

    // rendre le livre disponible

    public function rendreLivre()
    {

        $this->setDisponible(true);
        echo "le livre : " . $this->getTitre() . " est à nouveau disponible";
    }
}

$livre1 = new Livre("1984", "George Orwell", 1949, false);

echo $livre1->getTitre();

echo "<br>";

$livre1->setTitre("1985");
echo "<br>";

echo $livre1->getTitre();

$livre2 = new Livre("44", "facundo varas", 1984, true);

$livre3 = new Livre("45", "facundo varas", 1985, true);


$livre1->afficherFiche();
$livre2->afficherFiche();

$livre2->emprunter();
$livre2->emprunter();

$livre3->emprunter();
echo $livre3->getNombreEmprunts();

$livre3->rendreLivre();
$livre3->emprunter();
echo $livre3->getNombreEmprunts();

$livre2->setNombreEmprunts(800);
echo $livre2->getNombreEmprunts();



?>