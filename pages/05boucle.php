

<h1>Les boucles</h1>


<?php

// boucle FOR


$tab=["123", "124", "125"];

var_dump($tab);

for($i=0;$i<count($tab);$i++){

    echo $tab[$i]."<br>";
    
}

// avec la boucle for vous avez plus de controlle sur l'index, par exemple vous pouvez commencer la boucle à l'index de votre choix.

// boucle for dans un tableau associatif


 // Boucler un tableau associatif 

 $tab2=[
    "id"=>123,
    "email"=>"em@gmail.com",
    "age"=>25
 ];

//  for($i=0 ; $i<count($tab2);$i++){

//     echo $tab2[$i];
//  }


// cette boucle me créer une erreur car la boucle for ne peux pas boucler un tableau associatif n'ayant pas d'index.



 // FOREACH
 // la boucle foreach() fonctionne sur les tableaux ou objets, erreur si on boucle sur un e variable non array( tableau)

// le mot clé " as " est OBLIGATOIRE 

// Il y a deux facons d'ecrire la boucle foreach 


 $users=[

    "id"=>123,
    "email"=>"em@gmail.com",
    "age"=>25

 ];


foreach( $users as $valeur ){
    
    echo "je suis la valeur : ".$valeur ."<br>";
}

echo"<br>";

foreach ( $users as $clé => $valeur ){

    echo "je suis la clé : ".$clé. " et je suis la valeur : ".$valeur ."<br>";
}

// foreach avec un tableau indexé

$ville =["Tulon" , "Buenos-aires" , "Barcelone "];

echo "<br>";

foreach($ville as $index){

    echo " ma ville est : " . $index. "<br>";
}


foreach ( $ville as $index=>$valeur ){

    echo " ma ville est : " . $valeur." et son index" .$index.  "<br>";
}


// boucle while 

$i=0 ; // valeur de départ de la boucle 

while($i<5){ // tant que $i est inferieur à 5 nous entrons dans la boucle
    if( $i==5){
        echo $i;
    }else{
        echo "$i---"; // tu affiche la valeur de $i
    }
    $i++; // on oublie pas d'incrémenter de 1 à chaque tour de boucle pour ne pas avoir une boucle infinie
} // pas besoin de ;

echo "<br>";

// boucle do...while 

$j=11;

echo "<h3> boucle do...while </h3>";

do{
    echo $j++ ."";
    echo "je fais un tour de boucle <br>";
}while($j>10 && $j<20);


//  boucler un tableau multidimentionel
$users5=[

"id"=> 123,
"email" =>[
    "tst"=> "test2",
    "test1"=> "test3",
    "test2"=>"test3",

],
"age"=>25

];



foreach($users5["email"] as $clearno =>$arno){ // on entre dans le tableau email et on le boucle on récupére les valeurs et ses clés

echo  $clearno . " : " . $arno . "<br>";

}

$tab5=[
    [1,2,3],
    [4,5,6],
    [7,8,9],
];
echo "<pre>";
var_export($tab5);
echo "</pre>";

foreach ($tab5 as $index=> $tabIndex){
    // on affiche l'index des tableaux ( tabIndex est un tableau)
 echo "<hr> tableau index : $index <hr>";
foreach($tabIndex as $value){
// on fait une 2éme boucl e pour boucler $tabIndex pour afficher ses valeurs
    echo "value : $value <br>";

}
}


?>