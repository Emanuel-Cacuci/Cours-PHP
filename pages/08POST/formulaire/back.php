<h1>données du formulaire </h1>
<a href="front.php"> aller formulaire </a>
<hr>
 
<?php
 
print '<pre>';
print_r($_POST);
print '<pre>';
 
 
if(empty($_POST["pseudo"]) || empty($_POST["email"]))
{
 
    echo "erreur tous les champs doivent être remplis";
}else{
 
    echo "prenom posté :  $_POST[pseudo] <br> " ;
    echo "email posté :  $_POST[email] <br> " ;
 
}
 
 