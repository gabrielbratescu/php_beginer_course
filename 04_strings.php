<?php

$mesaj = "Astazi este o zi buna de invatat PHP";

$lungimeString = strlen($mesaj);
$indexPhp = strrpos($mesaj, "PHP");
$mesajNou = str_replace("buna" , "proasta", $mesaj);
$mesajArray = explode(" ", $mesaj);

echo "Lungimea mesajului este: " . $lungimeString . "<br>";
echo "Index-ul cuvantului PHP este: " . $indexPhp . "<br>";
echo "Mesajul nou este: " .$mesajNou . "<br>";
echo "Mesajul in forma de array: ";
print_r($mesajArray);
echo "<br>";
echo "Var Dump: ";
var_dump($mesajArray);



 ?>
