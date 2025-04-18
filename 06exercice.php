<h3>1. Fonction sans paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greet() qui affiche "Hello, world!" lorsqu'elle est appelée.</h3>

<?php

function greet(){

echo  "Hello, world";

}
greet();

?>


<h3>2. Fonction avec paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greetUser() qui prend un paramètre $name et affiche "Hello, [name]!" où [name] est la valeur passée à la fonction.</h3>

<?php
$name="Emanuel";
function greetUser($name){
   echo "Hello, $name!";
}
 greetUser($name)

?>


<h3>3. Fonction avec paramètres et avec valeur de retour
Exercice : Créez une fonction appelée sum() qui prend deux paramètres $a et $b, les additionne, et retourne le résultat.</h3>

<?php
$a=4;
$b=6;

function sum($a, $b){
$result=$a+$b;
return $result;
}
echo sum($a, $b)
?>


<h3>4. Fonction qui calcule la somme des nombres d'un tableau
Exercice : Créez une fonction appelée sumArray($numbers) qui prend un tableau de nombres $numbers en paramètre et retourne la somme de tous les éléments du tableau.</h3>

<?php
$v=[1,2,3,4,5];
 
function sumArray($v){
   
    $resultat = array_sum($v);
    return $resultat;
 
}
echo(sumArray($v))."<br>";
?>


<h3>5. Fonction avec paramètre par défaut
Exercice : Créez une fonction appelée greetWithTime() qui prend deux paramètres, un nom $name et un moment de la journée $timeOfDay (par défaut "day"), et qui affiche "Good [timeOfDay], [name]!</h3>

<?php
$name="Monday";
$timeOFDAY="day";
function greetWithTime($name, $timeOFDAY){
echo "Good $timeOFDAY, $name!";
}
greetWithTime($name, $timeOFDAY);
?>4


<h3>6. Fonction qui retourne un tableau
Exercice : Créez une fonction appelée getFruits() qui ne prend aucun paramètre et retourne un tableau contenant trois noms de fruits.</h3>

<?php


function getFruits(){
    return ["Pomme", "Poire", "Mangue"];
}
print_r(getFruits()) ;
?>


<h3>7. Fonction avec une chaîne de caractères comme paramètre
Exercice : Créez une fonction appelée reverseString($str) qui prend une chaîne de caractères $str en paramètre et retourne cette chaîne en ordre inversé.</h3>

<?php
$str='a b c';

function reverseString($str){
 echo strrev($str);
}
 reverseString($str);


?>


<h3>8. Fonction avec paramètres et vérification de type
Exercice : Créez une fonction appelée divide($a, $b) qui prend deux paramètres $a et $b. La fonction doit vérifier que $b n'est pas égal à 0 avant de diviser $a par $b et retourner le résultat. Si $b est égal à 0, la fonction doit retourner un message d'erreur.</h3>

<?php
$a=1;
$b>0; 
function divide($a, $b){
if($b>0){
return $result=$a/$b;
}else{
    $b=0;
    echo "Erreur";
}
}
 echo divide($a, $b);

?>
 

<h3>9. Fonction qui utilise une boucle pour générer un résultat
Exercice : Créez une fonction appelée generateMultiplicationTable($number) qui prend un nombre $number en paramètre et retourne un tableau contenant la table de multiplication de ce nombre de 1 à 10.</h3>

<?php
$number=5;

function generateMultiplicationTable($number){
   
    for ($n=1; $n<=10; $n++){
        $resultat[$n]=$n*$number;
    }
 
    // foreach($resultat as $n=> $result){
    //     echo "$number x $n = $result<br>";
    // }
    echo "<pre>";
    print_r($resultat);
    echo "</pre>";
}
 
generateMultiplicationTable(9);
echo "<br>";
 

?>


<h3>10. Fonction avec une condition complexe
Exercice : Créez une fonction appelée checkEligibility($age, $hasLicense) qui prend en paramètre un âge $age et un booléen $hasLicense. La fonction doit retourner "Eligible" si l'utilisateur a 18 ans ou plus et possède un permis de conduire, sinon "Not Eligible".</h3>

<?php

function checkEligibility ($age, $hasLicense){
if ($age >=18 && $hasLicense === true){
    return "eligible";
}else {
 echo "not eligible";
}
}
echo checkEligibility(21, true);
?>
 



<hr>

<h3>EXERCICE 1 — Afficher une variable simple</h3>

<?php

$prenom="Emanuel";

echo "<h2> Mon prénom : $prenom</h2>";

?>


<h3>EXERCICE 2 — Affichage d’une fiche produit</h3>

<?php

$tab = [

    "nom" => "Stylo",
    "prix" => 1.5
];


echo "<h3>Produit :" . $tab["nom"]. "</h3>";
echo "<p> le prix est ". $tab["prix"] . "$</p>";

 ?>


<h3>EXERCICE 3 — Boucle sur un tableau simple</h3>

<?php
$tab2 = [

    ["Prenom" => "Daniel"],
    ["Prenom" => "Adam"],
    ["Prenom" => "Jean"],
    ["Prenom" => "Francois"],
    ["Prenom" => "Ana"]
];



?>

<ul>
    <?php
    
    foreach($tab2 as $cle => $valeur)

    
    foreach($valeur as $cles => $value ){
        echo "<li>".$cles. "  " . $value  ."</li>";

    }

    
    
   
    ?>
</ul>

<h3>EXERCICE 4 — Générer plusieurs "cartes produit"</h3>

<?php
$tab3= [
    "Pull" => 10,
    "Veste" => 30,
    "Pantalon" => 20 
];

echo "<h2>4. Cartes produit HTML avec boucle</h2>";

foreach ($tab3 as $keys => $valeur2){
    echo "<div>" .$keys. " et son prix est :" .$valeur2.  " $</div>";
    
}

?>




<h3>EXERCICE 5 — Addition simple</h3>

<?php
$prix1=8;
$prix2=7;

function some($prix1, $prix2){

    $res=$prix1+$prix2;
    return $res;
    
}
echo "<h4>Total : " .some ($prix1, $prix2) ."</h4>";




?>


<h3>EXERCICE 6 — Ajouter la TVA</h3>

<?php

// // $ttc=20%;

// function ajouterTVA($prix){

//     // return $ttc=20%;
// }

// echo "<h2>6. Calcul de la TVA</h2>";

?>


<h3>EXERCICE 7 — Compter des éléments</h3>

<?php
$produitsss=["jupe","robe","pantalon","jupe","robe","pantalon"];
 
 
echo count($produitsss);


?>


<h3>EXERCICE 8 — Fonction d'affichage réutilisable</h3>

<?php
$produit3=[
    [
        'nom' => 'Stylo',
        'prix' => 1.5
    ],
    [
        'nom' => 'crayon',
        'prix' => 1.1
    ],
    [
        'nom' => 'cahier',
        'prix' => 2.1
    ]
];
 
 
function afficherProduit($produit3){
   
        foreach($produit3 as  $valeur ){
            echo " <div class='cart'><div class='valeur color'> " .$valeur["nom"] ."</div> <div class='valeur col'> ".$valeur["prix"] ."</div></div> <br>";
        }
    }
    echo afficherProduit($produit3);


?>


<h3>EXERCICE 9 — Total du panier</h3>

<?php

$panier = [
    ["nom" => "stylo", "prix" => 1.5],
    ["nom" => "cahier", "prix" => 2.0],
    ["nom" => "gomme", "prix" => 0.5],
];
$total = 0;
foreach ($panier as $produit) {
    $total += $produit['prix'];
}

echo "<p>Total du panier : $total €</p>";

echo "<h2>9. Total d'un panier</h2>";

?>


<h3>EXERCICE 10 — Appliquer une remise</h3>

<?php
$prix=44;
$pourcentage=30 ;

function appliqueRemise($prix, $pourcentage){

    $remise=$prix-($prix*$pourcentage/100);
    return $remise;

}

   echo appliqueRemise($prix, $pourcentage);
  
   echo "<h2>10. Prix avec remise</h2>";

?>


<h3>EXERCICE 11 — Ajouter au panier</h3>

<?php
echo "<h2>11. Ajouter un produit au panier</h2>";

$panier = ["banana", "litchi"];

$produit = "mokotra";
function ajouterAuPanier($array, $produitAdd) {

    $array[] = $produitAdd;
return $array;

}

$panier = ajouterAuPanier($panier, $produit);
echo "<pre>";
print_r($panier);
echo "</pre>";
echo count($panier)
?> <button>voir panier <?php echo count($panier) ?></button>
 


<h3>EXERCICE 12 — Afficher un panier vide ou non</h3>

<?php

$panier = [
     "produit1" => "chemise",
];

if(empty($panier)){
     echo "Le panier est vide";
 }else{
    echo "Vous avez un produit dans le panier";
 };

?>


<h3>EXERCICE 13 — Moyenne des notes</h3>

<?php

echo "<h2>13. Moyenne d'un tableau</h2>";

$notes = [12, 14, 18];

function calculDeMoyenne($array){
$moyenne = array_sum($array) / count($array);
return $moyenne;
}

echo "<p>Moyenne :".calculDeMoyenne($notes) ."</p>";

?>


<h3>EXERCICE 14 — Trier un tableau</h3>

<?php



?>


<h3>EXERCICE 15 — Filtrer produits à moins de 10 €</h3>

<?php



?>


<h3>EXERCICE 16 — Tableau d’utilisateurs</h3>

<?php



?>


<h3></h3>

<?php



?>


<h3>EXERCICE 17 — Table de multiplication</h3>

<?php



?>


<h3>EXERCICE 18 — Formater un prix</h3>

<?php



?>


<h3>EXERCICE 19 — Afficher les produits chers</h3>

<?php



?>


<h3>EXERCICE 20 — Simuler un panier complet</h3>

<?php




?>