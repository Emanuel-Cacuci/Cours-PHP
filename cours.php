<?php 

    // Debug des erreurs PHP
ini_set('display_errors', 1);
// display error est activé en mettant valeur 1
ini_set('display_startup_errors', 1);
// doit être activé pour afficher les erreurs
error_reporting(E_ALL);
// configure PHP pour signaler tous les types d'erreurs

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Premiers pas en php</h1>

    <?php

    // je suis un commentaire

    /*
     * je suis
     * un commentaire
     * en plusieurs lignes
     */
    
    echo "<h2>cour 1</h2>";

    echo "<p>je suis un paragraphe avec echo</p>";

    $ma_premiere324Variable;

    $ma_premiere324Variable="premiere variable";
    
    echo $ma_premiere324Variable;

    echo "<p> ma variable est : $ma_premiere324Variable </p>";

    ?>


    <h2>les variables</h2>

    <p>
       definition : une variable est un espace memoire qui porte un nom et permettant de conserver une valeur . 
    </p>

    <?php
    $a=123;
    $b="je suis une phrase";
    $c=true;
    $d=123.5;

    echo gettype($a)."<br>";
    echo gettype($b)."<br>";
    echo gettype($c)."<br>";
    echo gettype($d)."<br>";


    $content ="<div>";
    $content .= "valeur de \$a est : $a";
    $content .= "</div>";

    echo $content;

    ?>


    <h2>les constantes et constante magique</h2>

    <p>une constante se déclare toujour en MAJUSCULE</p>

    
    <?php
    define("ROOT","http://localhost/cour_php/");
    define("ORDI", "je suis une constante");
    // peut étre utilisé n'importe où dans le script ce qui la rend plus flexible
    echo ROOT , "<br>";
    echo ORDI , "<br>";


    
    ?>


    <h3>les constantes magiques</h3>

    <?php
    function br(){
        echo "<br>";
    }

    // affiche le numéro en ligne ici 94
    echo __LINE__;
    br();
    // affiche chemin complet vers le fichier
    echo __FILE__;
    br();
    // affiche chemin complet vers le dossier
    echo __DIR__;
    br();
    ?>


<h2>exercice</h2>
 
 <p> faire un dossier compenent où il y aura le footer et le header</p>
  
 <p>
     faire un dossier pages avec 3 fichiers : accueil boutique a propos
 </p>
  
 <p>avec include_once lier les header et footer</p>
  
 <p> dans un dossier creer un fichier css et js et les lier au php </p>
  
 <p>
     ecrivez des variables que vous allez injecter dans le DOM. Avec le echo essayer aussi print  
 </p>
  
 <p> avec echo  faire une balise p avec une class et faire un toggle pour changer la couleur de la balise p au click ( queryselecor/ addeventlistener / classlist.add pour ajouter une class si besoin ......)</p>


   

</body>
</html>