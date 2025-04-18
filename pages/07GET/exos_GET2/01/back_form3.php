<!-- Veriffier si emailest vide -->

<?php

$email = !empty($_POST['email']) ? htmlspecialchars($_POST['email']) : "Email vide !";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultat du formulaire</title>
</head>
<body>
 <h3>Votre email est : <?= $email?></h3>
</body>
</html>
