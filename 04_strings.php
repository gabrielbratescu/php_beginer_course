<?php

$mesaj = "Astazi este o zi PHP buna de invatat PHP";

echo $mesaj . "<hr>";

$lungimeString = strlen($mesaj);
$indexPhp = strpos($mesaj, "PHP");
$mesajNou = str_replace("buna" , "proasta", $mesaj);
$mesajArray = explode(" ", $mesaj);


echo "Lungimea mesajului este: " . $lungimeString . "<br>";
echo "Index-ul cuvantului PHP este: " . $indexPhp . "<br>";
echo "Mesajul nou este: " .$mesajNou . "<br>";
echo "Mesajul in forma de array: ";
print_r($mesajArray);
echo "<br>";
echo "Var Dump: ";
echo "<pre>";
var_dump($mesajArray);
echo "</pre>";


 ?>
