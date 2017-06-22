<?php
include ("header.php");
require("11_functii_lib.php");


$fileHandler = fopen("zzz_example.csv", "r");
$i = 1;
while ( !feof($fileHandler)) {
    $linie = fgets($fileHandler);
    if ($i >1 && strlen($linie)>0 ){  //fara header si fara ultima linie citita care are lungimea 0
      $linieArray = explode(",", $linie);
      myArrayPrint($linieArray);
    }
  $i++;
}
fclose($fileHandler);

echo "<hr>";

$fileHandler = fopen("zzz_example.csv", "r");
$i = 1;
$allData = array();
while ( !feof($fileHandler)) {
    $linie = fgets($fileHandler);
    if ($i >1 && strlen($linie)>0){  //fara header si fara ultima linie citita care are lungimea 0
      $linieArray = explode(",", $linie);
      array_push($allData, $linieArray);
    }
  $i++;
}
myArrayPrint($allData);
fclose($fileHandler);


include ("footer.php");

 ?>
