<h4>Exercice 1 : Créer une classe Personne</h4>

<?php

class Personne{
    public $nom;
    public $age;
    
    public function __construct($a, $b){
        $this->nom = $a;
        $this->age = $b;
    }
   
    public function sePresenter(){
        echo "Bonjour, je m'appelle " . $this->nom . "j'ai " . $this->age . " ans <br>";
    }

}

$per1 = new Personne(" Emanuel ", 21 );
$per1->sePresenter();

?>

<h4>Exercice 2 : Classe Rectangle</h4>


<?php

class Rectangle{
    public $longeur;
    public $largeur;

    public function __construct($a,$b){
        $this->longeur = $a;
        $this->largeur = $b;
    }
    public function getSurface() {
        if(is_numeric($this->longeur) && is_numeric($this->largeur)){
        echo " la surface est de $this->longeur * $this->largeur : ".$this->longeur * $this->largeur;} else{
            echo "Valeur non numérique";
        }
    }
}

$rectangle1 = new Rectangle(22, 32);
$rectangle1 -> getSurface();
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
 


class Voiture {
    public string $marque;
    private int $vitesseMax;
 
    public function __construct(string $marque, int $vitesseMax) {
        $this->marque = $marque;
        $this->setVitesseMax($vitesseMax); // on utilise le setter pour appliquer la vérification
    }
 
    // Getter pour la vitesse
    public function getVitesseMax(): int {
        return $this->vitesseMax;
    }
 
    // Setter avec vérification
    public function setVitesseMax(int $vitesse): void {
        if ($vitesse >= 0) {
            $this->vitesseMax = $vitesse;
        } else {
            echo "❌ Vitesse invalide. Elle doit être >= 0 km/h.<br>";
        }
    }
 
    public function afficherInfos(): void {
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
class Etudiant{
    public $nom;
    private $notes;
    public function __construct($a,$b)
    {
        $this->nom = $a;
        $this->setnotes($b);
    }
    public function getnotes(){
        return $this->notes;
    }
    public function setnotes($c){
        if(($c >= 0) && ($c <= 20)){
            $this->notes=$c;
        }else{
            echo "note pas comprise entre 0 et 20 ❗ <br>";
        }
    }
    public function AfficherMention(){
        if($this->notes >=16){
            echo "Mention très bien <br>";
        }elseif ($this->notes >=14){
            echo "Mention bien <br>";
        }elseif ($this->notes >=12){
            echo "Mention Assez bien <br>";
        }elseif ($this->notes >=10){
            echo "Mention Passable <br>";
        }else{
            echo "Echec <br>";
        }
    }
}
 
$Etudiant1 = new Etudiant("Nawel", 20);
var_dump($Etudiant1) ;
$Etudiant1->AfficherMention();
?>
 
 
