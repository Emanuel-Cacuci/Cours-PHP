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

<h2>Utilisation de final</h2>

<p>La mot-clé empéche la surcharge (redirection) d'une méthode.</p>
<p>Elle peut être utilisée sur des classes, des méthodes, ou des propriétés.</p>
<p>Si au début d'une classe il y a final, faire un héritage de cette class est impossible, c'est la class final sans enfants possible</p>


<p>final class MaclassFinal, création de la class final sans enfants possible</p> 


<p>class ClassEnfant extends MaclassFinal, on ne peut pas faire de héritage de la class final, cela va donnée une erreur</p>

<p>Quand on déclare final dans une méthode, les classes qui hérite ne pourront pas rédefinir la méthode</p>


<p>Pourquoi utiliser final sur une méthode ?</p>

<ul>
    <li>Pour verrouiller un comportement spécifique qui ne doit pas être modifié</li>
    <li>Pour garantir la sécurité des données</li>
    <li>Pour eviter les erreur et les abus d'heritage</li>
</ul>

<?php

class Employe

{

    protected string $nom;
 
    public function __construct(string $nom)

    {

        $this->nom = $nom;

    }
 
    final public function travailler()

    {

        echo "$this->nom travaille sérieusement.<br>";

    }

}
 
class Manager extends Employe

{

    // ❌ ERREUR ! On ne peut pas redéfinir une méthode final

    /*

    public function travailler() {

        echo "$this->nom travaille en dirigeant l'équipe.<br>";

    }

    */

    public function diriger()

    {

        echo "$this->nom dirige une équipe.<br>";

    }

}
 
$m = new Manager("Sophie");

$m->travailler(); // fonctionne

$m->diriger();
 
?>


<h2>Trait</h2>

// Un trait en PHP est une sorte de bloc de code réutilisable.
// Il permet de partager des méthodes ou propriétés entre plusieurs classes,
// sans avoir à utiliser l'héritage (extends).
//
// Contrairement à une classe, un trait ne peut pas être instancié directement.
// On l’utilise dans une classe avec le mot-clé "use".
//
// C’est très utile quand plusieurs classes ont des comportements identiques,
// mais qu’elles n’ont pas de lien logique pour hériter d’une même classe.
//
// Exemple :
//
// trait Logger {
//     public function log($message) {
//         echo "[LOG] " . $message;
//     }
// }
//
// class Utilisateur {
//     use Logger;
// }
//
// $u = new Utilisateur();
// $u->log("Utilisateur connecté.");  // Affiche : [LOG] Utilisateur connecté.
//
// Ce système permet de factoriser du code sans casser la hiérarchie objet.
 
 


?>