<?php

var_dump($_POST);

// connexion a la base de données 


// Chaîne de connexion DSN (Data Source Name)
$dsn = "mysql:host=localhost;dbname=societe"; // Remplacer 'societe' par le nom réel de votre base
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
    echo "Connexion réussie";
} catch (PDOException $exception) {
    // Affichage de l'erreur si la connexion échoue
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
    exit;
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["form-number5"])){
        //  si $_POST['prenom] est vrai et existe alors on l'affiche à la variable $prenom SINON on affecte un chaine vide

$prenom = $_POST['prenom'] ?? '';

$nom = $_POST['nom'] ?? '';

$sexe = $_POST['sexe'] ?? '';

$service = $_POST['service'] ?? '';

$date_embauche = $_POST['date_embauche'] ?? '';

$salaire = $_POST['salaire'] ?? 0;


// requete avec prepare et INSERT INTO en sql

$sql="INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)";
 



//  on prepare la requete fournie ($sql)
//  elle est analysé par SQL
// rien n' est encore envoyé a la base de données
// c'est comme dire : 
// "Voici ma requete que je te donnne en mode bruillon pour que'elle soit préte quand j'aurais de vrai données"

// elle retourne un objet spéciale qui est PDOStatement

$sql="INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)";

// on stock la requete SQL dans une variable $sql
//  :prenom, :nom, :sexe, :service, :date_embauche, :salaire : paramétres de la requete vide
$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':prenom'         => $prenom,
    ':nom'            => $nom,
    ':sexe'           => $sexe,
    ':service'        => $service,
    ':date_embauche'  => $date_embauche,
    ':salaire'        => $salaire
]);

// ici on execute la requete avec les vrai valeurs

// PDO va vérifier que les paramétres sont corrects
// PDO va protéger la requete contre les injections SQL
// PDO fait tot le bulot


echo ' nouveau employé ajouté';


    }
}

?>