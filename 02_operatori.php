<?php

$a = 25;
$b = 5;

echo "Nr 1: $a" . "<br>";
echo "Nr 2: $b" . "<br>";

echo "<hr>";
echo "<h2>Operatori aritmerici</h2>";
$c = $a+$b;
echo "Suma celor 2 numere este : " . $c . "<br>";

$c = $a-$b;
echo "Diferenta celor 2 numere este : " . $c  . "<br>";

$c = $a*$b;
echo "Produsul celor 2 numere este : " . $c  . "<br>";

$c = $a/$b;
echo "Catul celor 2 numere este : " . $c  . "<br>";

$c = $a%$b;
echo "Restul impartirii celor 2 numere este : " . $c  . "<br>";

$c = $a**$b;
echo "Nr 1 ridicat la puterea nr 2 :  " . $c  . "<br>";

echo "<hr>";
echo "<h2>Operatori de atribuire</h2>";

$a += $b;
echo "Nr 1 este acum : $a  <br>";
$a /= $b;
echo "Nr 1 este acum : $a  <br>";

echo "<hr>";
echo "<h2>Operatori de incrementare/decrementare</h2>";

echo "Nr 1 este acum :" . ++$a  . "<br>";
echo "Nr 1 este acum :" . $a++ . "<br>";
echo "Nr 1 este acum :" . $a . "<br>";

echo "<hr>";
echo "<h2>Operatori logici si de comparatie</h2>";
echo "<h4>Exemple la functia <a href='#' >IF .. ELSE</a></h4>";


?>
