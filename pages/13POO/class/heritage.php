<?php

namespace App;

?>

<h1>Cour sur l'heritage des classes en PHP</h1>

<h3>Héritage c'est quoi ?</h3>

<p>L'héritage permet à une classe d'hériter des propriétés et méthodes d'une classe.</p>

<h4>Exemple : </h4>


<?php

class Animal{
    public function respirer() : void{
        echo "Je respire dans l'air <br>";
    }
}

class Chien extends Animal {

    public function aboyer() : void{
        echo "Ouaf ouaf <br>";
    }
}

class Chat{
    public function mioler() : void{
        echo "Miaou <br>";
    }
}

$chien1=new Chien();
$chien1->respirer();
$chien1->aboyer();

?>

<h2>Redefini une méthode (Override)</h2>

<?php

class Poisson extends Animal{

    // cas 1 redefinition complete de la méthode (on ecrase la version parente que sur la class Poisson)
    
    public function respirer() : void{

        echo "Je respire de l'eau";
    }

}

class Reptil extends Animal{

    // cas 2 on utilise le parent:: respirer() pour remplacer la version du parent

    public function respirer() : void {
        // on appelle d'abord la méthode du parent (Animal)
        parent::respirer();
        // puis on ajoute une phrase personalisée
        echo "et dans l'eau ! <br>";
    }

}

// quand on veut conserver la logique parent et l'enrichire : ajouter un comportement par exemple, on utilise parent::
// quand on veut totalment changer la logique du parent : on ecrase la version parent on utilise pas parent::

$reptil=new Reptil();
$reptil->respirer();

class Vehicule{

    public string $marque="sans nom";
    protected int $vitesse=0;
    private string $moteur="sans moteur";


    public function getMoteur() : string {
        return $this->moteur;
    }

    public function setMoteur(string $moteur) :string {
        return $this->moteur = $moteur;
    }

    public function accelerer() : void {

        $this->vitesse += 10;
        echo "Vitesse actuelle : {$this->vitesse} km/h<br>";        

    }
}

class Voiture extends Vehicule{

    public function turbo() : void {

        $this->vitesse += 50;
        echo "Vitesse actuelle apres turbo : {$this->vitesse} km/h<br>";
    }

    public function creerMoteur(string $moteur) :?string {
        return $this->setMoteur($moteur);
    }

    public function afficherMoteur() : void {
        echo "Moteur : {$this->getMoteur()}<br>"; // comme moteur est en private on doit passer par le getter
    }
}

$voiture1=new Voiture();
 echo $voiture1->creerMoteur("Essence <br>");
 $voiture1->accelerer();
 $voiture1->turbo();

?>

<h2>Abstract class</h2>

<p>une class abstraite ne peut pas être instanciée directement.</p>
<p>Elle sert de modéle aux classes qui l'etendent. Elle peut contenir des méthodes abstraites (à définir obligatoirement)</p>

<p>Elle sert de model de basse et peut contenir :</p>

<ul>
    <li>Des méthodes normales avec du code</li>
    <li>des méthodes abstraites sans corps</li>
</ul>

<?php

abstract class Animals {
    protected string $nom;
 
    public function __construct(string $nom) {
        $this->nom = $nom;
    }
 
    // Méthode abstraite : aucune implémentation ici
    abstract public function crier();
 
    // Méthode normale : peut être utilisée telle quelle
    public function sePresenter() {
        echo "Je suis un animal nommé $this->nom<br>";
    }
}
 
class Chiens extends Animals {
    public function crier() {
        echo "Ouaf Ouaf 🐶<br>";
    }
}
 
$rex = new Chiens("Rex");
$rex->sePresenter();
$rex->crier();

?>