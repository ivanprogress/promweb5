<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php //deklarasi skrip php
    include "praktikum2_inc.php"; //mengambil data dari file lain
    echo $angka; //menampilan isi varaibel angka
    echo "<br>";
    //jika kondisi variabel angka terpenuhi akan menjalankan perintah dibawahnya
    if ($angka==100) {
      echo "Memuaskan";
    }
    elseif ($angka<100 && $angka>=85) {
      echo "Sangat Baik";
    }
    elseif ($angka<85 && $angka>=70) {
      echo "Baik";
    }
    elseif ($angka<70 && $angka>=55) {
      echo "Cukup";
    }
    elseif ($angka<55 && $angka>=0) {
      echo "Kurang";
    }
     ?>
  </body>
</html>
