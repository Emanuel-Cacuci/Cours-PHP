<?php

if(isset($user)){
   echo 'User existe';

}else{
echo 'Veuillez vous connecter';
}
?>

<form method="POST" action="../pages/recup_form.php">
    <br>
<label for="prenom">Prénom</label>
<input type="text" name="prenom" id="prenom" required>

<label for="nom">Nom</label>
<input type="text" name="nom" id="nom" required>

<button name="" type="submit">Se connecter</button>
</form>