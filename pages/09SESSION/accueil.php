<?php
session_start();


if (empty($_SESSION['prenom']) || empty($_SESSION['nom'])) {
    header('Location: connexion.php');
    exit();
};
?>

    <h1>ACCUEIL</h1>

    <h2>Bienvenue <?= htmlspecialchars($_SESSION['prenom']) ?> <?= htmlspecialchars($_SESSION['nom']) ?> !</h2>

    <form action="deconnexion.php" method="post">
        <button type="submit" name="logout">Déconnexion</button>
    </form>




