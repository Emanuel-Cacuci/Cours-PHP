<h3>Exercice 1 : Opérateurs de base</h3>

<?php
function br() {
    echo "<br>";
}

$a="2";
$b="4";

echo $a + $b;
br();
echo $a - $b;
br();
echo $a * $b;
br();
echo $a % $b;

?>

<h3>Exercice 2 : Operation combinées</h3>


<?php
$a="2";
$b="4";

echo $a += $b;
br();
echo $a -= $b;
br();
echo $a *= $b;
br();
echo $a %= $b;

?>

<h3>Exercice 3 : Incrémentation et décrémentation (préfixe = ++$variable)</h3>


<?php
echo "<h3>Incrémentation</h3>";
$counter="10";
br();
echo $counter++;
br();
$counter="10";
echo ++$counter;

echo "<h3>Décrémentation</h3>";
$counter="10";
br();
echo $counter--;
br();
$counter="10";
echo --$counter;


?>