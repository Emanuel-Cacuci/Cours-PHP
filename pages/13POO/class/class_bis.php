<h2> Difference entre php procédural et le POO</h2>

<ul>
    <li>
        Le php procédural est un language de programmation qui n'a pas de classes, de méthodes, de proprietés, de constructeur, etc.
    </li>
    <li>
        Le PHP procédural est un code écris ligne par ligne avec de functions et des variable globales.
    </li>
    <li>C'est un enchainment d'instructions, comme une recette de cuisine.</li>
        
</ul>

<p>
    Exemple
</p>

<?php

$nom = "Ousmane";
$age = 8;

function direBonjour($a, $b){
    return "Bonjour " . $a . " et tu as " . $b . " ans <br>";
}

echo direBonjour($nom, $age);

// Avantages :
// Simple à comprendre

// Rapide pour les petits scripts

//  Facile à démarer

// Inconvénients :
// Variable globales - collisions, erreurs
// pas réutilisable
// difficile à mantenir quand le code devient plus complexe


class Users{
    public $nom;
    public $age;
    public function __construct($a, $b){
        $this->nom = $a;
        $this->age = $b;
    }
    public function direBonjour(){
        echo "Bonjour " . $this->nom . " et tu as " . $this->age . " ans <br>";
    }
}

$user = new Users("Ousmane", 8);
$user->direBonjour();

$user1=new Users("Alice", 25);
$user1->direBonjour();

?>


<p>La programmation orionté objet (PDO) est un paradigme de programmation qui permet de mieux organiser le code, de le rendre plus réutilisable, modulaire et mintenable.</p>


<h2>Les classes</h2>

<p>Une classe est une structure qui définit un objet, c'est le modéle à partir duquel des objets (instances) sont créés</p>
<p>On la déclare avec le mot-clé class.</p>

<?php

// exemple simple de classe

class Voiture
{
    // proprietés
    public $marque;
    public $couleur;

    // méthode 
    public function klaxoner(){
        echo "Tuut tuut !";
    }

}
// Creer un objet à partir d'une classe

$maVoiture = new Voiture();

$maVoiture->marque = "Peugeot";
$maVoiture->couleur = "Rouge";
$maVoiture->klaxoner();
echo "<pre>";
print_r($maVoiture);
echo "</pre>";

class Car{
    public $marque; // propriétés
    public $couleur;  // propriétés

    // Méthodes
    public function __construct($a, $b){
        $this->marque = $a; // $this->marque fait reference à public $marque;
        $this->couleur = $b; // $this->couleur fait reference à public $couleur;

    }

    // méthiode, c'est une function qui s'execute quand on appelle l'objet vavec " -> "
    public function demarrer(){
        echo "La $this->marque démarre !";
    }

}

$new_car= new Car("Peugeot", "Rouge");
echo "<pre>";
print_r($new_car);
echo "</pre>";
$new_car->demarrer();

echo $new_car->marque;
?>

<h4>__construct()</h4>

<p>La méthode __construct() est une méthode magique qui est auttomatiquement appelée lors de la création d'un objet. Elle permet d'initialiser les propriétés de l'objet.</p>

<h4>$this->marque</h4>
<p>Cela fait référence à la propriéte de la classe : public $marque;</p>

<p>public $marque;</p>
<p>Déclare un propriéte dans la classe, mais elle appartient à chaque objet (instance).</p>
<ul><li>
    Elle est définie dans la classe (c'est son plan de construction),
    mais elle est instanciée dans chaque objet que tu crées à partir de cette classe.
</li></ul>

<p>En clair, c'est comme si tu disais : << propriéte marque de cet objet, prends la valeur que je viens de recevoir dans le paramétre $a >></p>

<h4>Propriétés et méthodes</h4>
<p>Les propriétés sont des variables de la classe .</p>
<p>Les méthodes sont des fonctions de la classe.</p>

<h4>Portée des propriétes</h4>
<p>La portée des propriétés déterminer l'acces à ces propriétés.</p>

<h4>Portée des méthodes</h4>
<p>La portée des méthodes déterminer l'acces à ces méthodes.</p>

<p>public : accesible partout</p>
<p>private : accesible uniqment dans es classes enfants</p>


<p>public : accesible partout</p>
<p>private : accesible uniqment dans es classes enfants</p>
<?php
 
 
class Animal {
    private $espece;
 
public function __construct($a) {
    $this->espece = $a;
}
 
public function getEspece() {
    return ucfirst($this->espece);
}
public function setEspece($a) {
      $espaceValide=["chat", "chien", "oiseau", "reptile"];
 
      if (in_array($a, $espaceValide)) {
          $this->espece = $a;
      }else{
        echo "espèce invalide <br>";
      }
 
 
 
}
// __toString() est une méthode magique qui permet de convertir l'objet en string
public function __toString()
{
    return "L'animal est de l'espèce " . $this->espece;
}
}
 
$chat = new Animal("chat");
echo $chat;
 
echo $chat->getEspece();
echo "<br>";
$chat->setEspece("lapin");// affiche espéce invalide
 
?>

<p>private : la propriété est protégée, on peut pas y acceder directement, on est obligé de passer par le getter et le setter</p>

<p>setEspece(): Méthode de contrôle : verifie si la valeur est correcte</p>
<p>getEspece(): Méthode de lecture : retourne la valeur de la propriété</p>

<h4>Getter : Permet de lire (acceder) la propriéte privé</h4>
<h4>Setter : Permet de modifier la propriété privé, avec ou sans sécurité</h4>

<h4>Pourquoi ne pas mettre simplement les propriétés en public ?</h4>
<p>Parce que c'est moins sécurisé, on peut modifier la propriéte directement, sans passer par le setter.</p>
<p>On ne peut controller ce qu'on met</p>


