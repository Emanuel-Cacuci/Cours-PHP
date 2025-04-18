<h3>Exercice 1 : Concatenation simple</h3>

<?php 


function emanuel() {
    echo "<br>";
}

?>



<?php

$nom="Depuis";
$prenom="Benoit";
echo "$nom" .' '. "$prenom";

?>

<h3>Exercice 2 : Concatenation avec des phrases</h3>

<?php

$phrase1="Le ciel est ";
$phrase2="bleu aujourd'hui";
echo "$phrase1" . "$phrase2";

?>

<h3>Exercice 4 : Concatenation avec l'operateur combiné ".="</h3>

<?php

$texte="je vais ";
$texte.= "à la page";
echo $texte;
?>

<h3>Exercice 6 : Quotes simples et doubles</h3>

<?php

$mot="PHP"; 
echo "le mot est : $mot";
emanuel();
echo 'le mot est : $mot';


?>