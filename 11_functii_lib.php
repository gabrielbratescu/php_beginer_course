<?php

function calculeazaDiferenta($a, $b){
  return $a-$b;
}

function calculeazaProdus($a, $b){
  return $a*$b;
}

function getSexFromCNP($cnp) {

  $primaCifra = substr($cnp, 0, 1);
  

  if ($primaCifra == 1 || $primaCifra == 5 || $primaCifra == 7) {
    return "M";
  }
  else if ($primaCifra == 2 || $primaCifra == 6 || $primaCifra == 8) {
    return "F";
  }
  else {
    return "N/A";
  }
}



function myPrint($a){
  echo "<pre>";
  print_r($a);
  echo "</pre>";
}
 echo "<br>";

$cnp = "9110808123456";
echo "Sexul pt CNP-ul $cnp este:  " . getSexFromCNP($cnp);

?>
