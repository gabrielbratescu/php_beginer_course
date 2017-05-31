<?php


$a = 273;

if ($a > 25) {
  echo "$a este mai mare decat 25";
}

echo "<br>";

if ($a < 25) {
  echo "$a este mai mic decat 25";
}
else {
  echo "$a este mai mare decat 25";
}

echo "<br>";

if ($a < 25) {
  echo "$a este mai mic decat 25";
}
elseif ($a < 500 ) {
  echo "$a este mai mic decat 500 dar mai mare dacat 25";
}
else {
  echo "$a este mai mare decat 500";
}
echo "<br>";

$ceva = true;

if ($ceva) {
  echo "Ceva este $ceva";
}

if (!$ceva) {
  echo "Ceva este $ceva";
}
else {
  echo "Ceva este $ceva";
}







?>
