<?php
 
echo "🏁";
print_r($_POST["pays"]);
br();
echo "🏁";
print_r($_POST["choix_pays"]);
echo "nnnnn" . $_POST['pays'];
br();
echo "🏁";
echo "</pre>";
print_r($_POST);
echo "<pre>";
$drapeau = ['France' => '🏴', 'Italie' => '🏳️', 'Japon' =>'🚩', 'Madere' =>'🏁'];
print_r($drapeau);    
if (isset($_POST['choix_pays'])) {
    if (array_key_exists($_POST['pays'], $drapeau)) {
        echo $_POST['pays'] . $drapeau[$_POST['pays']];
    }
}