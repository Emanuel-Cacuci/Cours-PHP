<?php
// Vérification des données reçues

$prenom = isset($_GET['prenom']) ? htmlspecialchars($_GET['prenom']) : 'Prénom inconnu';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultat du formulaire</title>
</head>
<body>
   <h3>Bienvenue : <?= $prenom?></h3>
</body>
</html>
