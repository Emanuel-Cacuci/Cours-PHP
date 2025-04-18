<?php

include_once "../cours-php/pages/12CRUD/view/03update.php";


$_POST = [

'id'=>12,
'nom'=>"oridi"

];

// UPDATE - Mise à jour du nom d'un élève
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifier'])) {
    $id = (int) $_POST['id'];
    $nouveauNom = trim($_POST['nom']);
    echo "<pre>";
    print_r(get_class_methods($stmt));
    echo "<pre>";
 
    // Requête SQL préparée pour modifier le nom
    $stmt = $pdo->prepare("UPDATE eleves SET nom = :nom WHERE id = :id");
    $stmt->execute([
        ':nom' => $nouveauNom,
        ':id' => $id
    ]);
 
    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>✅ Élève ID $id mis à jour avec succès ! Nouveau nom : $nouveauNom</p>";
    } else {
        echo "<p style='color: red;'>❌ Aucun changement effectué.</p>";
    }
    // header("Refresh: 2; url=" . $_SERVER['PHP_SELF']);
    // exit;

}
?>
 

?>