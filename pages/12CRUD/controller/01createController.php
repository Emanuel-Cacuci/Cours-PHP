<?php

include_once "../cours-php/pages/12CRUD/view/01create.php";

// Comment founctionne $_POST :
// $_POST=[

//     'username'=>"cundo",
//     'ordinateur_numero'=>"33",
//     'ajouter'=>''
// ];



// CREATE - Ajouter un élève
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['ajouter'])){


    $nom=trim($_POST['nom']);
    $pc=trim($_POST['ordinateur_numero']);

    $stmt= $pdo->prepare("INSERT INTO eleves (nom, ordinateur_numero) VALUES (?, ?)");

    $stmt->execute([
        $nom, $pc
    ]);

    echo "<p style='color:green;'>✅ Élève ajouté avec succès !</p>";
    header("Refresh: 2; url=" . $_SERVER['PHP_SELF']);
    exit;

    
}
?>