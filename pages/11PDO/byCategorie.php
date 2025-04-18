<?php
 
 
 
ini_set('display_errors', 1);
error_reporting(E_ALL);
 
 
 
 
// Chaîne de connexion DSN (Data Source Name)
$dsn = "mysql:host=localhost;dbname=boulangerie"; // Remplacer 'societe' par le nom réel de votre base
$user = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe de l'utilisateur MySQL
 
try {
    /**
     * Création d'une instance PDO pour la connexion à la base de données
     *
     * PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION : active le mode exception pour la gestion des erreurs SQL
     * PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC : les résultats seront récupérés sous forme de tableau associatif
     * PDO::ATTR_EMULATE_PREPARES => false : désactive l'émulation des requêtes préparées (meilleure sécurité et performance)
     */
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
    echo "Connexion réussie ";
} catch (PDOException $exception) {
    // Affichage de l'erreur si la connexion échoue
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
    exit;
}

if(!isset($_GET['category'])){
    die("Acune catégorie n'a été sélectionnée");
}
$category=$_GET['category'];
 
var_dump($_GET);

 

$sql = "SELECT * FROM produit WHERE categorie = :category";
 
$stmt = $pdo->prepare($sql);
 
$stmt->execute([
    ':category' => $category
]);
 
$produits = $stmt->fetchAll();
 
echo "<pre>";
print_r($produits);
echo "</pre>";
 
?>
 
 
<section>
    
    <?php foreach ($produits as $produit) : ?>
        <div>
            <h3><?= $produit['nom'] ?></h3>
            <p><?= $produit['prix'] ?> €</p>
            <p><?= "Categorie : ".  $produit['categorie'] ?></p>
        </div>
    <?php endforeach; ?>
</section>
 


