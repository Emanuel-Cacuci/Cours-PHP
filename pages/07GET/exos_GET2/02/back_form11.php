<?php
session_start();
// print_r($_POST);
// unset($_SESSION);
// session_destroy($_SESSION);
// var_dump($_SESSION);
if(isset($_SERVER["REQUEST_METHOD"]) == "POST"){

    $_SESSION['nom'] = $_POST['nom'];
}
echo "<p>Bonjour : " . $_SESSION['nom']."</p>";

?>
