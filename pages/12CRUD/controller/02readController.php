<?php

include_once "../cours-php/pages/12CRUD/view/02read.php";


// READ - Récupération de tous les élèves
$sqlAll = "SELECT * FROM eleves";
$stmtAll = $pdo->prepare($sqlAll);
$stmtAll->execute();
$eleves = $stmtAll->fetchAll(); // On récupère les résultats sous forme de tableau associatif
 

?>