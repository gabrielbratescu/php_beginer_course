<?php

function calculeazaSuma($a, $b){
   $c = $a + $b;
   return $c;
}

$d = calculeazaSuma(3,5);

echo "Suma numerelor 3 si 5 este: " . $d;


require ("11_functii_lib.php");

myPrint(2);
myPrint(array(2,4,6,8,5,3,32));
