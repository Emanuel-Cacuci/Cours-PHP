<h2>Les fonction PHP</h2>


<h4>Quelques fonctions prédéfinies</h4>
<p>permet de réaliser un traitement spécifique prédeterminé en PHP</p>

<?php
//strpos
$email="prenom@site.fr";
echo strpos($email,"@") . "<br>";// affiche la position de @ en comptant à partire de 0 dans la chaine de caractére // 6

if( strpos($email,"@")){
    echo "mail correct <br>";
}else{

    echo "mail NON correct <br>";
}

//**************** */


$text="   je suis un texte trés trés long et pas de place dans la div   ";

echo $text ."<br>";

// strlen
echo "longeur du texte : ".strlen($text). "<br>"; // longeur de chaine = 79 il calcule les espaces vides

//substr
$text_modif=substr($text, 0,20); // pour couper la chaine de caractére au endroit souhaité

echo $text_modif ."... <br>";

// 
// trim
echo strlen(trim($text));// efface les espaces au début et à la fin de la chaine de caractére // renvoie72


// fonction pour tableaux 
//is_array()

$tab=[

    "id" =>123,
    "email" => "@gmail.com",
    "names" =>[
        "name1" => "fab",
        "name2" => "seb"
    ],
    "role" => "user"
];

// is_array verrifie si une variable est un tableau
foreach($tab as $cle=>$valeur){

    if(is_array($valeur)){// si $valeur est tableau tu boucle
    foreach($valeur as $value){
      echo "les valeurs : $value <br>";
    }
}else{
    echo "<hr>  $cle est : $valeur <hr>";
}
}


?>

<h4>creation d'une fonction</h4>

<p>les fonctions sont un morceau de code encapsulés dans les accolades et portant un nom, qu'on appelle au besoin pour executer un script</p>
<?php

function hr(){// creation d'une fonction

    echo "<hr>"; // cette fonction affiche un echo de hr
}

echo "<h6>titre </h6>";
hr(); // on appelle la fonction // on peut appeler plusieurs fois la méme fonction
hr();
hr();
hr();
hr();

// fonction avec return

function bonjour(){
    return "bonjour <br>";
}

echo bonjour();// affiche bonjour

// fonction avec return et parametre

function bonjour2($qui){// ceci est parametre

    return "Bonjour " .$qui."<br>";
}

$var=bonjour2("Seckene"); // ceci est un argument

echo $var;

$a=2;
$b=3;

function calc($a,$b){
    $result=$a+$b;
    return $result;
    
    }
    
    echo calc($a,$b);

    function calcul(){
        global $a;
        global $b;
        $result= $a+$b;
        return $result;
    }

    echo calcul();// donne 5
    
    
   // Variables locales et variables globales


   // de l'espace local à l'espace global
   $var=6; // c'est une variable global en dehor d'une fonction
   function jour(){
    $jour ="mardi";// la variable $jour est une variable locale de la fonction
    return $jour;
   }

   echo jour();
   $jouermardi=jour();// j'ai stocker la valeur de $jour (variable locale) dans une nouvelle variable

   // de l'espace global au local

   $pays="Maroc"; // variable globale  
   function affichePays(){

    global $pays; // le mot clé global permet de récuperer une variable global au sein d'une foncion
    echo $pays; // affiche Maroc
   }


?>