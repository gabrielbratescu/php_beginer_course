<?php
include("header.php");
require("11_functii_lib.php");

if (isset( $_POST['cuvant_cheie'])) {
  $cuvant_cheie = $_POST['cuvant_cheie'];
  if ( strlen($cuvant_cheie) > 0 ) {

    $fileHandler = fopen("zzz_example.csv", "r");

    $result = array();
    $i = 1;
    while ( !feof($fileHandler)) {
        $linie = fgets($fileHandler);
        $pos =  strpos($linie, $cuvant_cheie);
        if ($pos !== false){
          array_push($result, "Linia $i");
        }
      $i++;
    }
    fclose($fileHandler);

    if (count($result) > 0) {
      myArrayPrint($result);
    }
    else {
      echo "Cuvantul nu se afla in fisier";
    }
  }
}


?>

<form action="15_cautare_string.php" method="POST" name="" class="form-horizontal" id="" >
  <div class="form-group">
    <label class="col-sm-2">Cuvant cheie</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="cuvant_cheie" maxlength="30"  />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12 col-sm-offset-2">
      <button type="submit" name="cauta" class="btn btn-warning">Cauta</button>
    </div>
  </div>
</form>

<?php
include("footer.php");
 ?>
