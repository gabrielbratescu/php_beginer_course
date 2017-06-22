<?php
include ("header.php");


$cuvant = "alune";

switch ($cuvant) {
  case 'alune':
    echo "Alune";
    break;
  case 'migdale':
    echo "Migdale";
    break;
  case 'miere':
    echo "Miere";
    break;

  default:
    echo "Nu e niciuna de mai sus";
    break;
}


include ("footer.php");


?>
