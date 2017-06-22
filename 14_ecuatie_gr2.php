<?php
include ("header.php");
require("11_functii_lib.php");

//  a*x^2 + b*x + c = 0;
//  x1; x2
//  delta =  b^2 - 4*a*c;
//  x1 = (-b + radical din delta ) / 2*a
//  x2 = (-b - radical din delta ) / 2*a

$a = 1;
$b = 5;
$c = 4;

// $a = $_POST['a'];
// $b = $_POST['b'];
// $c = $_POST['c'];


$delta = $b**2 - 4*$a*$c;  //9
$radicalDinDelta = sqrt($delta); //3

$x1 = (-$b + $radicalDinDelta) / 2*$a;  // -1
$x2 = (-$b - $radicalDinDelta) / 2*$a;  // -4

echo "Ecuatia $a x^2 + $b x + $c = 0 are radacinile : <br>";
echo "x1 = $x1 <br>";
echo "x2 = $x2 <br>";
echo "<br>";

myArrayPrint($_SERVER);



include ("footer.php");
?>
