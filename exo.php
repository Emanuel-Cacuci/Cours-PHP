<h3>/ ==============================
// EXERCICES PHP POUR DÉBUTANT
// Thèmes : GET, POST, SESSION, TABLEAU, FONCTION, BDD
// Auteur : PHP Copilot 🔨🤖🔧
// ==============================</h3>


<h3>// ========== EXERCICES 1 à 5 : GET & POST ==========</h3>





<h3>// Exo 1 : Crée un formulaire HTML qui utilise la méthode GET pour envoyer un prénom, puis affiche un message de bienvenue avec ce prénom en PHP.</h3>

<form method="get">

<label for="prenom">Votre prenom : </label>
<input type="text" name="prenom" required>

<input type="submit" value="Send">

</form>
<?php

var_dump($_GET);

?>

<h3>// Exo 2 : Crée un formulaire HTML qui utilise la méthode POST pour envoyer un nom et un âge. Affiche-les en PHP.</h3>

<form method="post">

<label for="nom">Votre nom : </label>
<input type="text" name="nom" required>
<br>
<label for="age">Votre age : </label>
<input type="text" name="age" required>

<input type="submit" value="Send">

</form>

<?php

var_dump($_POST);

?>

<h3>// Exo 3 : Modifie l’exercice 2 pour afficher un message différent selon que la personne est mineure ou majeure.</h3>

<?php



?>


<h3>// Exo 4 : Crée un formulaire de connexion basique avec POST (login / mot de passe). N'affiche rien si les champs sont vides.</h3>


<form method="post">

<label for="login">Se connecter</label>
<input type="text" name="nom" required>
<br>
<label for="password">Votre mot de passe : </label>
<input type="text" name="mot de passe" required>

<input type="submit" value="Send">



<h3>// Exo 5 : Envoie 2 nombres via GET, puis fais leur addition en PHP et affiche le résultat.</h3>

<?php



?>


<h3>// ========== EXERCICES 6 à 8 : SESSION ==========</h3>


<h3>// Exo 6 : Crée une page qui démarre une session et stocke un prénom envoyé via POST. Affiche un message : “Bonjour [prénom], bienvenue sur le site.”</h3>

<?php

session_start();

$use=[
    "prenom"=>"Emanuel",
];

var_dump($_POST);
if($_SERVER["REQUEST_METHOD"] == "POST"){

 $_POST['prenom'];
  
}



?>





<h3>// Exo 7 : Crée une seconde page qui récupère et affiche la valeur de la session (sans formulaire).</h3>

<?php


?>


<h3>// Exo 8 : Crée un bouton "Déconnexion" qui détruit la session et redirige vers la page de connexion.</h3>

<?php



?>


<h3>// ========== EXERCICES 9 à 12 : TABLEAUX ==========</h3>


<h3>// Exo 9 : Déclare un tableau avec 5 prénoms. Affiche-les un par un avec une boucle foreach.</h3>

<?php
$tab=[
    "prenom"=>"Emanuel",
    "prenom"=>"David",
    "prenom"=>"Jean",
    "prenom"=>"Paul",
    "prenom"=>"Marie",

];


foreach($tab as $cle=>$valeur){

    var_dump( $valeur);

}


?>

<h3>// Exo 10 : Crée un tableau associatif avec des noms et âges. Affiche un message pour chaque personne comme : "Paul a 23 ans."</h3>

<?php



?>


<h3>// Exo 11 : Trie un tableau de nombres dans l’ordre croissant, puis décroissant avec sort() et rsort().</h3>

<?php



?>

<h3>// Exo 12 : Crée une fonction qui prend un tableau de nombres et retourne la moyenne.</h3>

<?php



?>


<h3>// ========== EXERCICES 13 à 16 : FONCTIONS ==========</h3>


<h3>// Exo 13 : Crée une fonction direBonjour() qui prend un prénom et affiche "Bonjour, [prénom]".</h3>

<?php



?>


<h3>// Exo 14 : Crée une fonction qui prend 2 nombres et retourne leur produit.</h3>

<?php



?>


<h3>// Exo 15 : Crée une fonction qui teste si un mot est un palindrome (ex : kayak, radar).</h3>

<?php



?>


<h3>// Exo 16 : Crée une fonction qui prend une phrase et retourne le nombre de mots.</h3>

<?php



?>


<h3>// ========== EXERCICES 17 à 19 : FORMULAIRES LOGIQUES ==========</h3>

<?php



?>


<h3>// Exo 17 : Crée un formulaire pour envoyer une note sur 20 et affiche une appréciation selon la note :
   <?php  echo '<10 = "Insuffisant", 10–14 = "Passable", 15–17 = "Bien", 18–20 = "Excellent"' ?></h3> 

<?php



?>


<h3>// Exo 18 : Crée un formulaire où l’on entre une année, puis affiche si cette année est bissextile ou non.</h3>

<?php



?>


<h3>// Exo 19 : Crée un formulaire avec un champ "mot de passe" et affiche un message si le mot de passe est "admin123".</h3>

<?php



?>


<h3>// ========== EXERCICE 20 : BASE DE DONNÉES & CONNEXION ==========</h3>

<?php



?>


<h3>// Exo 20 :
// 1. Dans phpMyAdmin, crée une base de données appelée "exercices_php".
// 2. Dans cette base, crée une table "utilisateurs" avec les champs :
//    - id (INT, AUTO_INCREMENT, PRIMARY KEY)
//    - nom (VARCHAR)
//    - email (VARCHAR)
// 3. Crée un fichier connexion.php en PHP qui se connecte à cette base avec PDO.
?></h3>

<?php



?>







