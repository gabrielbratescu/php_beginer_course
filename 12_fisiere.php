<?php
include ("header.php");

// $fileHandler = fopen("zzz_fisier.txt", "a");
// $text = "Aici pun ce text vreau eu ca sa il putem scrie mai apoi in fisier";
//
// //$text = "fdsa,fhsadf;ldskfkfk;lkdsf;lkds;lfkkdsal";
//
// fwrite($fileHandler, $text);
// fclose($fileHandler);
// echo  "Fisierul zzz_fisier.txt a fost generat";

echo readfile("zzz_fisier.txt");

include ("footer.php");













?>
