<?php

require_once "./config/bdd.php"

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exemple de CRUD en PHP</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"> -->
 
    <style>

.box {
    border: 1px solid black;
    padding: 20px;
    margin: 20px;
}

    </style>
</head>
<body>
<h1>CRUD en PHP avec PDO</h1>
<p>CRUD est un acronyme qui désigne les quatre opérations de base que l'on peut effectuer sur des données :</p>
<ul>
    <li><strong>C</strong>reate (Créer)</li>
    <li><strong>R</strong>ead (Lire)</li>
    <li><strong>U</strong>pdate (Mettre à jour)</li>
    <li><strong>D</strong>elete (Supprimer)</li>
</ul>
<p>Ce script montre comment effectuer ces opérations sur une table <code>eleves</code> à l'aide de PHP et PDO.</p>
 

<?php

// Inclusion des contrôleurs CRUD
include_once "controller/01createController.php";
include_once "controller/02readController.php";
include_once "controller/03updateController.php";
include_once "controller/04deleteController.php";

?>

</body>
</html>
