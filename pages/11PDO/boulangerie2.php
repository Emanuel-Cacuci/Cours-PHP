
<?php
// Connexion à la base de données avec PDO
$dsn = 'mysql:host=localhost;dbname=boulangerie2;charset=utf8';
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