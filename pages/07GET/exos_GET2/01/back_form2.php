<?php
// Vérification des données reçues

$prenom = isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : 'Prénom inconnu';
$nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : 'Nom inconnu';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultat du formulaire</title>
</head>
<body>
    <h1>Bienvenue : <?= $prenom. ' ' .$nom?></h1>
   
</body>
</html>
