<?php
session_start();
 
// var_dump($_SERVER);
 
 $user=[
    "prenom"=>"Emanuel",
    "nom"=>"Cacuci"
 ];
 
 var_dump($_SESSION);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $_SESSION['prenom'] = $_POST['prenom'];
    
 
    $_SESSION['nom']=  $_POST['nom'];

    $tab=[
        "id"=>123
    ];
 
    // echo "prenom : ".$_SESSION['prenom']."<br>";
    // echo "nom : ".$_SESSION['nom'];
 
    // redirection vers la page d'accueil
 header("Location: accueil.php");
 exit(); // toujour appeler exit apres une redirection
 
 
}
 
?>
 
 
 
<!-- // Démarrage de la session au début du script -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form method="post" action="">
            <label for="prenom">Prénom:</label>
            <input type="text"  name="prenom" required><br>
            
            
            <label for="nom">nom</label>
            <input type="text"  name="nom" required><br>
            <input type="submit" value="valider">
        </form>
 
 
        <!-- <a href="./session1.php">test session</a> -->
    
</body>
</html>
 