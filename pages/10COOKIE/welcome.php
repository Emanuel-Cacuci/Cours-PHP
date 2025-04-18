<?php


include_once "./utils.php";

session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php');
    exit();
}

print '<pre>';
print_r($_SESSION);
print '<pre>';


$language = $_SESSION['language'] ?? 'English'; // Utilisez l'anglais comme langue par défaut



?>
<div style="margin: auto; width:50%">


    <h4><?php echo translate("Welcome",$language)." ". $_SESSION['prenom']  ?></h4>
    <h4><?php echo translate("text",$language) ." ". $_SESSION['language'];   ?></h4>
  
    <h4><a href="logout.php">Logout</a></h4>
    
    <h4><a href="./language.php">change language</a></h4>

</div>
