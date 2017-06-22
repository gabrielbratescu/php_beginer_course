<?php
include ("header.php");
require("11_functii_lib.php");


$anotimpuri = array("iarna" => "frig", "primavara" => "caldut",
               "vara" => "canicula", "toamna" => "racorica" );

  $i = 0;
  foreach ( $anotimpuri as $key => $value ) {
      echo "Anotimpul $key este cam $value";
      echo "<br>";
    $i++;
  }

  echo "Arrays-ul are ". count($anotimpuri);
  echo "<br>";
  echo "FOR-ul a avaut $i iteratii";


$arrayDinamic = array(); //multi-dim

  for ($i=0 ; $i < 10; $i++) {

      $arrayMic = array();
      for ($j =0 ; $j < 5; $j++){
        array_push($arrayMic, $i*$j*3+4);
      }

    array_push($arrayDinamic, $arrayMic);

  }

//myArrayPrint($arrayDinamic);

 ?>

<table class="table-striped col-sm-12">
  <thead>
    <tr>
      <td>???</td>
      <td>???</td>
      <td>???</td>
      <td>???</td>
      <td>???</td>
    </tr>
  </thead>
  <tbody>
    <?php
      for ($i=0; $i < count($arrayDinamic); $i++) {
        echo "<tr>";

            for ($j = 0 ; $j < count($arrayDinamic[$i]); $j++){
              echo "<td>";
              echo $arrayDinamic[$i][$j];
              echo "</td>";
            }

        echo "</tr>";
      }

    ?>

  </tbody>
</table>


<?php
include ("footer.php");
 ?>
