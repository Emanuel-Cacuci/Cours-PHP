<?php



// READ - Récupération de tous les élèves
$sqlAll = "SELECT * FROM eleves";
$stmtAll = $pdo->prepare($sqlAll);
$stmtAll->execute();
$eleves = $stmtAll->fetchAll(); // On récupère les résultats sous forme de tableau associatif
 

include_once "view/02read.php";
?>