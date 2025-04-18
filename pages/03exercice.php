
<h3>Écris un script qui : 1. Vérifie si la variable $email est définie (isset()).</h3>

<?php

$email="";

if (isset($email)) {

    echo "<p>Email existe</p>";

echo '<h3>2. Vérifie si $email est non vide (!empty()).</h3>';

} else {
    echo"<p>Email vide</p>";
};


?>



<?php

echo '<h3>Exercice 1 : Vérifier la validité d\'un âge</h3>';

$age = 80;
if(!empty($age) && $age>0 && $age<120){
    echo "<p>l'age est valide<p>";
}else{
    echo "<p>l'age est non valide</p>";
}

?>


<h3>Exercice 9 : Catégoriser une personne selon son âge</h3>


<?php

$age="20";
switch ($age){
    case $age<'12';
    echo "<p>Enfant</p>";
    break; // break est obligatoire pour quitter les conditions une fois la case exécutée
    case $age>'12';
    echo "<p>Adolescent</p>";
    break;
    case $age>'18';
    echo "<p>Adulte</p>";
    break;
    case $age>'50';
    default;
    echo "<p>Senior</p>";
    break;
}

?>

<h3>Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR</h3>

<?php

$username = "user123";
 $empreinte="";
 $password = "password123";
 if (($username && $empreinte) XOR ($username && $password)){
    echo "<p>Connexion reussi</p>";
} else {
    echo "<p>échec connexion</p>";
}

?>

<h3>Exercice 3 : Afficher le jour de la semaine</h3>


<?php
$jour=1;
switch ($jour){
    case $jour=1;
    echo $jour="Lundi";
    break;
    case $jour= 2;
    echo $jour="Mardi";
    break;
    case $jour= 3;
    echo $jour="Mercredi";
    break;
    case $jour= 4;
    echo $jour="Jeudi";
    break;
    case $jour= 5;
    echo $jour="Vendredi";
    break;
    case $jour= 6;
    echo $jour="Samedi";
    break;
    case $jour= 7;
    default;
    echo $jour="Dimanche";
    break;
}

?>

<h3>Exercice 4 : Comparaison de chaines de caractères</h3>


<?php

$a=1;
$b="1";

?>