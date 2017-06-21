<?php

$mesaj = "Gabriel,Bratescu,38,1.78,true";
$mesajArray = explode(",", $mesaj);

echo "Indexed array <br>";
var_dump($mesajArray);


$myArray = array("Gabriel", "Bratescu", 38, 1.78, true);
echo "<br><br>";
var_dump($myArray);

$myArray = array("prenume" => "Gabriel", "nume" =>"Bratescu", "varsta" =>38, "inaltime" =>1.78, "angajat" => true);
echo "<br><br>";
echo "Associative array <br>";
var_dump($myArray);

$myArray1 = array (
    array("prenume" => "Gabriel", "nume" =>"Bratescu", "varsta" =>38, "inaltime" =>1.78, "angajat" => true),
    array("prenume" => "Gigi", "nume" =>"Ionescu", "varsta" =>25, "inaltime" =>1.65, "angajat" => false),
    array("prenume" => "Ionel", "nume" =>"Vasilescu", "varsta" =>44, "inaltime" =>1.86, "angajat" => true)
);
echo "<br><br>";
echo "Multidimensional array <br>";
echo "<pre>";
var_dump($myArray1);
echo "</pre>";

echo "<hr>";
echo "<h3>Parcugere array </h3>";

for ($i = 0 ; $i < count($mesajArray); $i++ ){
  echo ($mesajArray[$i]);
  echo "<br>";
}
echo "<hr>";

foreach ($myArray as $key => $value) {
  echo "Elementul cu key <i>$key</i> este <b>$value</b>";
  echo "<br>";
}
echo "<hr>";

for ($i = 0; $i < count($myArray1); $i++){

    foreach ($myArray1[$i] as $key => $value) {
      echo "$key = $value ,";
    }

    echo "<br>";
}

?>
<hr>
<table border="1">
   <?php
   for ($i = 0; $i < count($myArray1); $i++){
     echo "<tr>";
       foreach ($myArray1[$i] as $key => $value) {
         echo "<td>$value</td>";
       }
       echo "</tr>";
   }
   ?>
</table>

<hr>
<?php
$ceva = array(NULL => NULL);
var_dump($ceva);
 ?>
