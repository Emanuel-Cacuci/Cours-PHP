

<h2>Qu'estce qu'une constante de classe ?</h2>

<p>Une constante de classe est une valeur fixe, immuable qui appartient à une class et non à un objet</p>
<p>elle se déclare par le mot-clé " const " et est en majuscule</p>


<?php

class Maclass
{
    public int $test;
    public const MACONSTANTE = "Valeur de la constante";
}


echo MaClass::MACONSTANTE;
?>

<p>Accés : <code>MaClass::MACONSTANTE</code></p>

<h2>Static </h2>
<p>
    Le mot-clé static est utilisé pour déclarer des propriétés ou des méthodes qui appartient à la classe elle-même, et non aux instances de cette classe.
</p>

<p>Les méthodes et propriéte static peuvent recupérer sans créer d'objet de la classe</p>
<p>Exemple : </p>
<ul>
    <li>Public static $test;</li>
    <li>Public static function test() : void</li>
</ul>

<?php

class CourPHP
{
    // Constante de classe
    public const VERSION ="1.0.0";
    // Propriéte statique
    public static $nbInstances = 0;

    private static $prive="Je suis visible en passant par les méthodes de la classe";
    public $nom;
    public function __construct($nom)
    {
        $this->nom = $nom;
        self::$nbInstances++;
    }

    public static function afficherNbInstances() : void
    {
        echo "total des instances : " . self::$nbInstances;
        echo self::$prive;
    }

}


echo courPHP::VERSION;
echo "<br>";
// Nous pouvons acceder à la valeur sans paser par l'objet
echo CourPHP::$nbInstances;

$eleve1 = new CourPHP("Adam");
$eleve2 = new CourPHP("Moussa");  

// Nous pouvons acceder à la function sans passer par l'objet 
CourPHP::afficherNbInstances();

$eleve1->afficherNbInstances();

// Je peux aussi modiffier sa valeur
CourPHP::$nbInstances=99;
echo CourPHP::$nbInstances;

echo CourPHP::VERSION;
// CourPHP::VERSION=2.0.0;


?>