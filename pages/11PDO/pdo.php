<?php



?>

<h1> PDO </h1>
<p>PDO est un accés à la base de données</p>
<p> PDO en PHP signifie PHP Data Objects</p>
<p> PDO est une interface orionté objet fourni par PHP pour accéder à différentes base de données</p>

<h2>À quoi sert PDO ? </h2>

<ul>
    <li>Se connecter à plusieurs base de données (MySQL, PostgreSQL, SQLit, etc.)</li>

    <li>Utiliser des requétes préparées pour éviter les injections SQL</li>

    <li>Centraliser les functions des gestions de bases de données</li>
</ul>

<?php
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

// try catchest un mecanisme de gestion des erreurs qui permet : 

// D' essayer un bloc de code pontentiellment risqué
// et de reagir proprement si une erreur se produit
// sans interompre le code brutalment 


//sans le try catch, si la connexion echoue, le script s' arréte brutalment avec un message d'erreur

function debug($params){
    echo "<pre>";
    print_r($params);
    echo "<pre>";

}

// cette function liste les methodes dans l'objet $pdo issue de la classe PDO
debug(get_class_methods($pdo));


// la classe PDO est un modéle ou un plan à l'inteieur de cette classe il y a des methodes (function) qui servent a communiquer avec la base de données.

// Class PDO : class native
// new PDO() : instance de la classe PDO 
// $pdo : c'est la variable qui contient l'objet PDO


// REQUETE AVEC EXEC -pour insert / update / delete

// la methode exec execute une requete SQL 

// l'operateur " -> " est utillisé pour appeler une méthode sur un objet

//  ajouter un employé avec exec et INSERT INTO en sql : 

 $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('John', 'Doe', 'M', 'RH', '2023-01-01', 2000)");

// supprimer un employé avec exec et DELETE FROM en sql :

// $pdo->exec("DELETE FROM employes WHERE id = 33");

// modifier un employé avec exec et UPDATE FROM en sql :

 $pdo->exec("UPDATE employes SET salaire = 5001 WHERE id = 44");


// exec execute des codes directement sans protection contres les injections SQL
// donc dangereux si on insére des donneées utilisateurs 

?>