<h3>1. Créer un formulaire qui demande le prénom en GET et l'affiche avec un message de bienvenue.</h3>

<form action="back_form1.php" method="get">

<label for="prenom">Votre prénom :</label>
<input type="text" name="prenom" required>

<input type="submit" value="Envoyer">
<?php


?>

</form>
<h3>2. Créer un formulaire avec méthode POST demandant nom et prénom, puis les afficher.</h3>

<form action="back_form2.php" method="POST">
    <label for="prenom">Votre prénom :</label>
    <input type="text" name="prenom" required>
    <br>
    <label for="nom">Votre nom :</label>
    <input type="text" name="nom" required>

    <input type="submit" value="Envoyer">   
</form>


<h3>3. Créer un formulaire qui demande un email et vérifier s’il est vide (POST).</h3>

<form action="back_form3.php" method="POST">
<label for="email">Votre email :</label>
<input type="text" name="email">

<input type="submit" value="Envoyer">
</form>


<h3>4. Créer un formulaire GET avec deux champs <input type="number">. Afficher la somme des deux après soumission.</h3>

    
<form method="get" action="back_form4.php">
        <label for="nombre1">Nombre 1 :</label>
        <input type="number" id="nombre1" name="nombre1" required><br><br>

        <label for="nombre2">Nombre 2 :</label>
        <input type="number" id="nombre2" name="nombre2" required><br><br>

        <button type="submit">Calculer la somme</button>
    </form>



<h3>6 Afficher les livres d’un auteur donné (nom passé en variable).</h3>

<form action="back_form6.php" method="post">
    <select name="pays" id="">
        <option value="">*  choisit ton pays  *</option>
 
        <option value="France">France</option>
        <option value="Italie">Italie</option>
        <option value="Japon">Japon</option>
        <option value="Madere">Madère</option>
    </select>
 
    <input type="submit" name="choix_pays" value="ok">
</form>
 