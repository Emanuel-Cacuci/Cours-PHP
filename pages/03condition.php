

 
<h2> Stuctures conditionnelles</h2>
 
 
 <?php
  
 ini_set('display_errors', 1);
 //display error est activé en mettant valeur 1
 ini_set('display_startup_errors', 1);
 // doit être activé pour afficher les erreur
 error_reporting(E_ALL);
 // configure PHP pour signaler tous les types d'erreurs
  
  
  
 // if else
  
 $a=8;
 $b=20;
 $c=2;
  
 if ($a>$b){
     echo " <p> a est plus grand que b</p>";
 }else{
     echo " <p> b est plus grand que a</p>";
 }
  
 if ($a>$c && $b>$c){
     echo  '<p> $c est plus petit que a et b</p>';
 }else{
     echo " <p> \$c est plus grand que a et b</p>";
 }
  
  
 // if elseif else
 // ici $a vaut 8
 if($a===8){
     echo "<p> a est egale a 8</p>";
 }elseif($a !=10){
     echo "<p> \$a est different de 10</p>";
 }else{
     echo "<p> les deux conditions sont fausses</p>";
 }
  
 // l'operateur XOR
  
 $username = "user123";
 $email = "";
 $password = "password123";
  
 if (($username && $password) XOR ($email && $password)) {
     echo "<p>Connexion réussie</p>";
 } else {
     echo "<p>Veuillez fournir soit un nom d'utilisateur et un mot de passe, soit une adresse e-mail et un mot de passe, mais pas les deux.</p>";
 }
  
 // Voici un exemple d'utilisation réelle de l'opérateur XOR dans un contexte de formulaire de connexion. Supposons que vous ayez un formulaire où l'utilisateur peut se connecter soit avec un nom d'utilisateur et un mot de passe, soit avec une adresse e-mail et un mot de passe, mais pas les deux en même temps.
  
  
 // l'operateur ||
  
 if ($a===9 || $b> $c){ // si $a est strictement egale a 9 ou si $b est plus grand que $c
 echo "<p> Ok pour au moins une des deux conditions </p>";
 }else{
     echo "<p> les deux conditions sont fausses </p>";
 }
  
// l'opérateur &&
$var1=2;
$var2=3;
$var3=4;

if($var1>$var2 && $var2>$var3){ // si $var1 est plus grand que $var2 ET si $var2 est plus grand que $var3 si ces deux conditions sont rempli alors tu affiche "les deux conditions sont vraies" sinon tu affiche "au moins une des deux conditions sont fausses"
    echo "les deux conditions sont vraies";
}else{
    echo "au moins une des deux conditions sont fausses";
}


 // comparaisons en == et ===
  
 $varA=1;
 $varB="1";
  
 echo gettype($varA)."<br>";// integer
  
 echo gettype($varB)."<br>";// string
  
 echo '$varA=1';
 echo '$varB="1"';
  
 if($varA == $varB) echo '<p> $varA est egale a $varB en valeur</p>';
  
 echo "<br>";
 if ($varA === $varB){
     echo '<p> $varA est egale a $varB en valeur et en type</p>';
 }else{
     echo '<p> $varA n\'est pas egale a $varB en valeur et en type</p>';
 }
  
 // dans cette deuxiemme condition $varA n'est pas strictement egale a $varB en valeur et en type
  
  
 $varC;// declaration de variable
 $varC = 1;// initialisation / affectation
  
 /**
 *
 * = signe d'affectation
 * == signe de comparaison en valeur
 * === signe de comparaison en valeur et en type
 *
 *
 */
  
  
 // isset() et empty()
  
 echo "<h2>isset() et empty()</h2>";
  
 // definition
  
 //isset() vérifie si une variable est définie ( si la variable existe) et à une valeur non null
  
 // isset() utilisé quand tu veux savoir si une varaible existe et n'est pas Null
 // avant d'utiliser un variable non definie
 // cas typiques avant d'acceder a une clé de tableau au ou super globale $_GET, $_POST, $_SESSION, $_COOKIE,
  
 // est considerer comme vide )
 /**
 * $vart="";
 * $vart=false;
 * $vart=0;
 * $vart="0";
 * $vart=0.0;
 * $vart=null;
 *
 */
  
  
 //empty() vérifie si une variable est vide (si la variable n'existe pas ou si elle a une valeur vide)
  
 // empty() si tu veux savoir si une variable est vide
 // mais si la variable n'existe pas empty ne génère pas d'erreur
  
 $varD = 1;
  
  
 if (empty($var1)) echo "0, vide, false, string vide";
  
  
 $varE = "";
 $varF = null;
  
 $varG;
  
 // $vartt n'est pas defini
 if(empty($vartt)){
  
     echo "<p> la variable n'est pas defini</p>";// revoie true la variable n'est pas defini
 }else{
     echo "<p> la variable est defini</p>";
 }
  
  
 if(empty($varE)){
     echo "<p> la variable est vide</p>";
 }else{
     echo "<p> la variable n'est pas vide</p>";
 }
  
 echo "<br>";
 if(isset($varE)){
     echo "<p> la variable est defini</p>";
 }else{
     echo "<p> la variable n'est pas defini</p>";
 }
  
  
  
 if (isset($var1)) echo "la variable est defini";
  
 if( isset($var2)) echo " variable existe et non null";
  
 echo "<br>";
  
 if ( isset($vartt)){
     echo "<p> \$vartt est defini</p>";
 }else{
  
     echo "<p> \$vartt n'est pas defini</p>";
 }
  
 echo "<br>";
  
  
 echo "<p> varG avec isset ( varG;)</p>";
 if(isset($varG)){
     echo "<p> la variable est defini</p>";
 }else{
     echo "<p> la variable n'est pas defini</p>";
 }
  
  
 $tab2=[
     "user"=>"mohamed",
     "connexion"=>false
 ];
  
  
  
 if(!empty($tab2)){
     // je demande si $tab2["user"] et $tab2["user"] n'est pas vide
     if(isset($tab2["user"]) && !empty($tab2["user"])){
        
         echo "<h5>Bonjour ".$tab2["user"]."</h5>";
           // si $tab2["connexion"] existe dans le tableau et n'est pas vide
         if( isset($tab2["connexion"]) && !empty($tab2["connexion"] )){
             echo "<button>DECONNEXION</button>";
         }else{
             echo "<button>SE CONNECTER</button>";
         }
  
  
     }else{
         echo "<h5>Bonjour invité</h5>";
        
     }
 }
  
  
  
  // switch 
// la condition switch est une autre syntaxe du if/else quand on veut comparer une variable à une multiple valeur.
$couleur="rouge";

switch ($couleur){
    case 'rouge';
    echo "<p>La couleur est rouge</p>";
    break; // break est obligatoire pour quitter les conditions une fois la case exécutée
    case 'bleu';
    echo "<p>La couleur est bleu</p>";
    break;
    case 'vert';
    echo "<p>La couleur est vert</p>";
    break;
    default;
    echo "<p>La couleur n'est pas rouge, bleu ou vert</p>";
    break;
}

  

  