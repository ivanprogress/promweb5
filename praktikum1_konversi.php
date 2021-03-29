<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Konversi Tipe</title>
  </head>
  <body>
    <?php //deklarasi skrip php
    $a = 300.4;
    echo $a; //deklarasi variabel
    echo "<br>";
    echo "tipe Double : ", doubleval($a), "<br>"; //pergantian tipe data ke double
    echo "tipe Integer : ", intval($a), "<br>"; //pergantian tipe data ke integer
    echo "tipe string : "; strval($a); //pergantian tipe data string
     ?>
  </body>
</html>
