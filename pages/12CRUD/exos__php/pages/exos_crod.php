<h3>1 Afficher tous les livres de la base (titre, année, genre).</h3>

<?php
// Variable contenant le nom de l'auteur à rechercher (peut venir d'un formulaire ou d'une URL plus tard)
$vic = "victor hugo";
 
// Préparation de la requête SQL avec un INNER JOIN pour lier livres et auteurs via auteur_id
$sqlautoro = "SELECT livres.titre, auteurs.nom
              FROM livres
              INNER JOIN auteurs ON auteurs.id = livres.auteur_id
              WHERE auteurs.nom = ?"; // Utilisation d'un paramètre pour sécuriser la requête
 
// Préparation de la requête avec PDO (protection contre les injections SQL)
$stmtautoro = $pdo->prepare($sqlautoro);
 
// Exécution de la requête avec la variable dynamique $vic comme paramètre
$stmtautoro->execute([$vic]);
 
// Récupération de tous les résultats dans un tableau associatif
$autoro = $stmtautoro->fetchAll();
 
var_dump($autoro);
// Vérification s'il y a bien des livres retournés pour cet auteur
if (!empty($autoro)) {
    // On initialise une variable pour afficher le nom de l’auteur une seule fois dans la boucle
    $auteurAffiche = false;
 
    echo "<ul>"; // Début de la liste des livres
 
    // Boucle sur chaque livre trouvé
    foreach ($autoro as $livre) {
 
        // Affichage du nom de l’auteur une seule fois, lors du premier tour de boucle
        if (!$auteurAffiche) {
            echo "<h3>L'auteur " . htmlspecialchars($livre['nom']) . " a ce(s) livre(s) disponible(s) :</h3>";
            $auteurAffiche = true; // On indique que l’auteur a été affiché
        }
 
        // Affichage du titre du livre dans une liste
        echo "<li>" . htmlspecialchars($livre['titre']) . "</li>";
    }
 
    echo "</ul>"; // Fin de la liste
} else {
    // Message si aucun livre n'est trouvé pour cet auteur
    echo "Aucun livre trouvé.";
}
?>
