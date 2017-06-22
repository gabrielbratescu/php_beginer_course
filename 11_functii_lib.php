<?php

function calculeazaDiferenta($a, $b){
  return $a-$b;
}

function calculeazaProdus($a, $b){
  return $a*$b;
}

function getSexFromCNP($cnp) {

  $primaCifra = substr($cnp, 0, 1);


  if ($primaCifra == 1 || $primaCifra == 3 || $primaCifra == 5 || $primaCifra == 7) {
    return "M";
  }
  else if ($primaCifra == 2 || $primaCifra == 4 || $primaCifra == 6 || $primaCifra == 8) {
    return "F";
  }
  else {
    return "N/A";
  }
}



function myArrayPrint($a){
  echo "<pre>";
  print_r($a);
  echo "</pre>";
}




?>
