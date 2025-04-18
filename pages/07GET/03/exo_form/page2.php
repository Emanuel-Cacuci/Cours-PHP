<?php
// Vérification des données reçues

$pseudo = isset($_GET['psuedo']) ? htmlspecialchars($_GET['pseudo']) : 'Pseudo inconnu';
$mail = isset($_GET['mail']) ? htmlspecialchars($_GET['mail']) : 'Mail inconnu';
 
var_dump($_GET);
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Résultat du formulaire</title>
</head>
<body>
    <h2>Données reçues :</h2>
    <p><strong>Pseudo :</strong> <?= $pseudo ?></p>
    <p><strong>Mail :</strong> <?= $mail ?></p>
 
    <a href="page1.php">⏪ Revenir au formulaire</a>
</body>
</html>