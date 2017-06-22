<?php
include ("header.php");


$i = 10;
echo "Nr initial este: " .$i;
echo "<hr>";

while ($i < 20) {
  echo "Nr meu este acum: " . $i;
  echo "<br>";
  $i++;
}
echo "<b>Nr la final este: " .$i. "</b>";

echo "<hr>";
$i = 10;
echo "Nr initial este: " .$i;
echo "<hr>";

do {
   echo "Nr este acum: ".$i. "<br>";
   $i++;
} while ($i < 20);

echo "<b>Nr la final este: " .$i. "</b>";

echo "<hr>";
$i = 25;
echo "Nr initial este: " .$i;
echo "<hr>";

do {
   echo "Nr este acum: ".$i. "<br>";
   $i++;
} while ($i < 20);

echo "<b>Nr la final este: " .$i. "</b>";

include ("footer.php");
