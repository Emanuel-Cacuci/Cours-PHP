<?php
include_once "./profil.php";

// session_start();

$user1=[
    "facundo"
];

var_dump($_SESSION);
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $_SESSION["facundo"] = $_POST["facundo"];
}

$tab=[
    "id"=>123
];

?>