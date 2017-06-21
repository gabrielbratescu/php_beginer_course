<?php

$nume = "Gabriel Mircea Bratescu";
$varsta = 38;
$angajat = true;
$inaltime = 1.78;

echo "Variabila nume contine $nume";

$nume = 42;
echo "<br>";
echo "Variabila nume contine $nume";

$nume = true;
echo "<br>";
echo "Variabila nume contine $nume";

$nume = array(1,2,3);
echo "<br>";
echo "Variabila nume contine $nume";

echo "<br>";
echo "<br> Variabila nume contine ";
var_dump($nume);

echo "<br>";
echo "<br>";
echo "Variabila nume contine ";
echo "<pre>";
var_dump($nume);
echo "</pre>";

echo "Variabila nume contine ";
echo "<pre>";
print_r($nume);
echo "</pre>";



?>
