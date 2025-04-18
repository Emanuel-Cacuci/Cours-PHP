
<?php
// Connexion à la base de données avec PDO
$dsn = 'mysql:host=localhost;dbname=boulangerie;charset=utf8';
$user = 'root';       // À adapter
$password = '';       // À adapter
 
try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion établie";
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}
?>

<header style="width:100%; display:flex; border: 1px solid #000; padding: 10px; margin: 10px; flex-wrap: wrap; gap: 10px;">
    <h1>Boulangerie Simple</h1>
    <nav style="width: 400px;margin:auto; display:flex; flex-wrap: wrap; gap: 10px;">
 
        <?php
        $sql = "SELECT * FROM categorie ";
 
        $stmt = $pdo->prepare($sql);
 
        $stmt->execute();
 
        $categories = $stmt->fetchAll();
 
        foreach ($categories as $categorie) {
            echo "<a href='byCategorie.php?category=" . $categorie['nom'] . "'>" . $categorie['nom'] . "</a>";
        }
        ?>
 
    </nav>
</header>
 


 <?php
$sql = "SELECT * FROM produit";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$produit = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<section style= "width:100%; display:flex; border: 1px solid #000; padding: 10px; margin:10px; flex-wrap: wrap; gap: 10x">

<?php
foreach($produit as $prod){
   echo " <div style= 'width:10%; display:flex; border: 1px solid #000; padding: 10px; margin:10px; flex-wrap: wrap; gap: 10x'>

   <img src='https://st3.depositphotos.com/1177973/12625/i/450/depositphotos_126254870-stock-photo-fresh-bakery-products.jpg' style= width:80 rem; height: 80 rem;>

    <div> Nom: {$prod['nom']} - Prix: {$prod['prix']} - Categorie: {$prod['categorie']}</div>
    </div>";
}


// echo "<pre>";
// print_r($produit);
// echo "<pre>";
?>
<?php

$sql = "SELECT * FROM utilisateur WHERE id = 1";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$utilisateur = $stmt->fetch();

?>

<p><?= $utilisateur['nom'] . " " . $utilisateur['prenom']; ?> est fan de <?= $produit[2]['nom']; ?></p>
