<?php
include ("header.php");


$copaci = array("mar", "par", "cires", "visin", "gutui");
var_dump($copaci);

echo "<hr>";
echo "Iteram cu for <br>";

$i = 0;
for ($i; $i < count($copaci); $i++ ){

  echo 'Azi am plantat un ' . $copaci[$i] ;
  echo "<br>";

}
echo "Am plantat $i copaci";


echo "<hr>";
echo "Iteram cu foreach <br>";
foreach ($copaci as $copac) {
  echo 'Azi am plantat un ' . $copac ;
  echo "<br>";
}

echo "<hr>";
//aici trebuie corectate key-urile
$persoana = array("nume"=>"Bratescu", "prenume"=>"Gabriel", "varsta"=>38, "angajat"=>true);
var_dump($persoana);

echo "<hr>";
echo "Iteram cu foreach <br>";

foreach ($persoana as $key => $value) {
    echo "Key : " . $key . " ; Value : " . $value;
    echo "<br>";
}

echo "<hr>";
echo "Iteram cu for <br>";
for ($i = 0 ; $i < sizeof($persoana); $i++ ){
  echo "Value : " . $persoana[$i];
  echo "<br>";

}


include ("footer.php");
