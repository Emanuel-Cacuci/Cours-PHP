<?php
var_dump($_GET);

?>


<p> <?php
// htmlspecialchars();
if(isset($_GET["nom"]) ){ // verifie si la clé nom existe
echo $_GET["nom"]."<br>";

}else{ // si clé nom n'existe pas alors tu affiche article

     echo "<p>".htmlspecialchars( $_GET["article"])."</p>";
}

if(array_key_exists("ville", $_GET)){ // verifie si la clé "ville" existe

echo $_GET["ville"];
}
else{
    echo $_GET["couleur"]."<br>";
    echo $_GET["prix"];
}




?></p>