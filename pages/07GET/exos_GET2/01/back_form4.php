<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
        $nombre1 = intval($_GET['nombre1']);
        $nombre2 = intval($_GET['nombre2']);
        $somme = $nombre1 + $nombre2;
        echo "<h2>La somme de $nombre1 et $nombre2 est : $somme</h2>";
    } else {
        echo "<h2>Veuillez entrer deux nombres.</h2>"; 
    }
?>