<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php //deklarasi skrip php
    // penulisan array dapat dibuat seperti berikut
    $nama[] = "Agung Teguh";
    $nama[] = "Wibowo";
    $nama[] = "Almais";
    echo $nama[1] . $nama[2] . $nama[0];
    echo "<br>";
    //menghitung jumlah elemen array
    $jum_array = count($nama);
    echo "jumlah elemen array = ". $jum_array;
    ?>
  </body>
</html>
