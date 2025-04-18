<?php

var_dump($_GET);

?>

<p>
<?php
if(isset($_GET["article"])){
    echo $_GET["article"]."<br>";
    echo $_GET["prix"]."<br>";
    echo $_GET["category"]."<br>";
}

if(isset($_GET["hotel"])){
    echo $_GET["hotel"]."<br>";
    echo $_GET["localisation"]."<br>";

}
?>
</p>