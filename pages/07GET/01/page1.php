
<?php

var_dump($_GET);

?>

<h1>Superglobal $_GET</h1>
<h2>page 1</h2>

<p>En PHP, une variable superglobal est une variable intégrée qui est toujours disponible, même à l'interieur d'une fonction</p>

<p>Les superglobales sont prédefinies par PHP</p>

<p>$_GET est utilisé pour : </p>
<ul>
    <li>Passer des informations entre pages</li>
    <li>filtrer ou rechercher un contenue</li>
    
</ul>

<p>Avantage de $_GET</p>

<ul>
    <li>Simple à utiliser</li>
    <li>Donées visible dans l'URL</li>
</ul>

<a href="page2.php?article=jean&couleur=rouge&prix=123">jean rouge</a>
<a href="page2.php?article=chemise&couleur=vert&prix=50">chemise verte</a>


<p> "?"  : ce caractére indique le début des paramétres GET qui sont envoyé au fichier PHP</p>
<p>$_GET est utiliser pour envoyer des information via l'URL</p>

<p> Ici "article=chemise" est un parametre GET, article est la clé et chemise est la valeur </p>

<p>& : ce caractére est utiliser pour séparer les paramétres dans une URL </p>

<p>Limite de longeur d'URL : </p>
<p> les navigateurs et serveurs limitent la tailles des URL</p>
<p>En genéral : 2083 caractéres MAX</p>


