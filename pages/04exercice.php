<h3>Exercice 3 : Créer et afficher un tableau associatif</h3>

<?php

// $user1 = [
//     "prenom" =>"Francois",
//     "nom" =>"Bertrand",
//     "age" =>25
// ];

// echo "<pre>";
// print_r($user1);
// echo "</pre>";

$user = [
    "prénom" => "Neo",
    "nom" => "Eon",
    "age" => 22
];


echo "<p> ton prenom {$user["prénom"]} ton nom {$user["nom"]} ton age {$user["age"]}</p>";
?>


<h3>Exercice 4 : Compter les éléments d'un tableau</h3>

<?php
$tab1=["bordeau","nice"];

$tab1[]="lyon";
array_push($tab1,"paris","brest");

var_dump($tab1);

?>

<h3>Exercice 5 : Créer un tableau multidimensionne</h3>

<?php

$tab_etudiants =[
    [
        "Jean", "Dubois",
        "note"=>10,
    
    ],
    [
        "Matthieu" =>"Dupont",
        "note"=>15,
    ],
    [
        "David" =>"Valse",
        "note"=>20
    ],
    [
        "nina" =>"Valse",
        "note"=>18
    ]
];
// ajouter un element voici la syntaxe
$tab_etudiants[]=[
        "Ana" =>"Dubois",
        "email" => "ana@gmail.com"
];
var_dump($tab_etudiants);
echo $tab_etudiants[0]["note"];


?>

<h3>Vérifier si la variable $tab4 est définie (isset) et non vide (!empty).</h3>

<?php
$tab_multi = [
        [
            'prenom' => 'Julien',
            'nom'    => 'Dupon',
          'telephone' => '0601020304'
        ],
     [
            'prenom' => 'Nicolas',
            'nom'    => 'Duran',
            'telephone' => '0601020304'
        ],
    [
            'prenom' => 'Pierre',
            'nom'    => 'Dulac'
        ],];
 
 
if ( isset($tab4) && !empty($tab4) ){
    $tab4[]=['prenom'=> 'Nawel ',
            'nom'=> 'Denis',
            'telephone'=>'0601020304'];
}else{
    $tab4=$tab_multi;
    if (!isset ($tab4[2]["telephone"]))
        $tab4[2]["telephone"]="061122334400";
}
echo "<pre>";
var_dump($tab4);
echo "</pre>";
echo "<pre>";
var_dump($tab_multi);
echo "</pre>";
?>