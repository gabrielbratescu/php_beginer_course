<?php

$fileHandler = fopen("zzz_fisier.txt", "w");
$text = "Aici pun ce text vreau eu ca sa il putem scrie mai apoi in fisier";
fwrite($fileHandler, $text);
fclose($fileHandler);
echo  "Fisierul zzz_fisier.txt a fost generat";


//echo readfile("zzz_fisier.txt");











?>
