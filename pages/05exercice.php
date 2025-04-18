<h3>Exercice 1 : Boucle while basique</h3>

<?php

// pour exo 2 pour verifier si nombre est pair utiliser modulo % si $nombre % 2 ===0donc $nombre est pare sinon non paire

//exo 1
 $nombre =0;
 while($nombre <=20){
     if( $nombre % 2 === 0){

         echo "$nombre<br>";
     }

     $nombre++;
 }

?>

<h3>Exercice 2 : Générer une liste d'années avec une boucle while</h3>

<?php

$a=2000;


do{
    echo $a++ . "<br>";

}while( $a<=date("Y"));


?>

<h3>Exercice 3 : Boucle do...while</h3>

<?php
$b=3;

do{
     if($b % 3 === 0){
         echo $b . "<br>";

     }
     $b++;

 }while($b<=30);    

?>

<h3>Exercice 4 : Boucle for</h3>
<?php 
echo "<br>";

$number = 7;

for ($i = 0; $i <= 10; $i++) {
    echo "$number x $i = " . ($number * $i) . "<br>";
}
echo "<br>";
?>

<h3>Exercice 5 : Boucles imbriquées pour créer une grille</h3>



<table style="border: 1px solid black; padding:5px">
   
        <?php
 
        for ($n=1; $n<=5; $n++){
            echo "<tr>";
            for($x=1; $x<=5; $x++){
                echo "<td style='border : 1px solid black'>$n$x</td>";
                }
            "</tr>";
        }
 
        ?>
 
</table>



<h3>Exercice 6 : foreach pour un tableau associatif</h3>

<?php

$tab1 =[
    "Prenom"=>"Daniel",
    "Nom"=>"Depuis",
    "Email"=>"dan@gmail.com",
    "Age"=>25
];

foreach($tab1 as $cle => $valeur){

    
    if($cle==="Email"){
        
        echo "<p>Email : <a href=".$valeur. ">". $valeur ."</a></p>";
        
     }else{
        
     echo "<p>".$cle . " : " .$valeur. "</p>"."<br>";
     }
}

?>


<h3>Exercice 7 : Foreach avec des clés personnalisées</h3>

<?php

$tab2 =[
    "Accueil"=>"https://www.php.net/manual/fr/function.empty.php",
    "Produit"=>"https://www.php.net/manual/fr/function.empty.php",
    "Contact"=>"https://www.php.net/manual/fr/function.empty.php"
];

foreach($tab2 as $key => $result ){

    echo "<a href=".$result. ">" .$key .  "</a><br>";
}


?>

<h3>Exercice 8 : Boucles imbriquées et conditions</h3>


<table style="border: 1px solid black; padding:5px">
<?php
        for ($i=1; $i<=10; $i++){
            echo "<tr>";
            for($w=1; $w<=10; $w++){
                $random=rand(0,100);
                if($random%2===0){
                    echo "<td style='background : green ; border : 1px solid black'>$random</td>";
                }else{
                   
                    echo "<td style='background : pink ; border : 1px solid black'>$random</td>";
                }
            }
            "</tr>";
        }
?>
</table>



<h3>Exercice 9 : Generation d'un calendrier</h3>

<?php

echo "<table style='border: 1px solid black; border-collapse: collapse; text-align: center;'>";
echo "
";

$jour = 1;

for ($i = 0; $i < 5; $i++) { 
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) { 
        if ($jour <= 31) {
            if ($j === 5 || $j === 6) { 
                echo "<td style='color: red; border: 1px solid black; padding: 5px;'>$jour</td>";
            } else {
                echo "<td style='border: 1px solid black; padding: 5px;'>$jour</td>";
            }
            $jour++;
        } else {
            echo "<td style='border: 1px solid black; padding: 5px;'></td>"; 
        }
    }
    echo "</tr>";
}

echo "</table>";

?>

<h3>Exercice 10 : Tableau de tableaux</h3>

<table border ="1">
<?php
for ($ligne = 1; $ligne <= 5; $ligne++)
{
?>

<tr>
<?php
for ($colonne = 1; $colonne <= 5; $colonne++)
{
?>
<td> <?php echo $ligne . $colonne; ?> </td >
<?php
}
?>
</tr>
<?php
}
?>
</table>
