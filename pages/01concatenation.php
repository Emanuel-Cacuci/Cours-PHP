<h3> la concatenation</h3>

<?php
$hello="bonjour";
$everyone="tout le monde ";

echo "$hello" .' '."$everyone" ;
echo $hello ." ". $everyone ;

// attention a savoir

echo '$hello' // avec un single quote la variable est lu comme une chaine de caractére 

?>

<h3>Concatenation lors des affectations</h3>


<?php
$prenom = "Shezad";
$prenom = "Seckene";
echo $prenom ."<br>";
// concatenation lors de l'affectation ici on affecte une valeur 'Nawel' à $prenom puis on ajoute (sans supprimer l'ancienne valeur) 


// opérateur combiné ".="

$prenom="Nawel";
$prenom .= ' ';
$prenom .="Najiba";
echo $prenom;
br();

$bb=12;
$dd=12;
echo $bb.$bb// resultat 1213 le $varible ne sont pas additionnés mais concaténées

?>