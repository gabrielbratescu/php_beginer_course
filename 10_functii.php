<?php
include ("header.php");
require ("11_functii_lib.php");


function calculeazaSuma($a, $b){
   $c = $a + $b;
   return $c;
}

$d = calculeazaDiferenta(3,5);


echo "Suma numerelor 3 si 5 este: " . $d;
myArrayPrint(2);



myArrayPrint(2);
myArrayPrint(array(2,4,6,8,5,3,32));
print_r(array(2,4,6,8,5,3,32));

echo "<br>";

$cnp = "6110808123456";
echo "Sexul pt CNP-ul $cnp este:  " . getSexFromCNP($cnp);

$anNastere = substr($cnp, 1, 2);

echo "Anul nasterii pt $cnp  este: ". "20" . $anNastere;

echo "<hr>";
echo "Operator tertiar (IF)";
echo "<br>";
echo $anNastere <99 ? "Mai mic decat 99" : "Mai mare decat 99";
echo "<br>";
$cucu = getSexFromCNP($cnp) == "M" ? 12 : "Bau" ;
echo "<br>";
echo $cucu;


include ("footer.php");
