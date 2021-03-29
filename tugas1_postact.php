<?php
if (empty($_POST['nama']) || empty($_POST['email'])) {
  header("Location:tugas2_kosong.php"); //redirect ke link
} else {
  include 'tugas1_inc.php'; //mengambil data dari file lain
  echo "<center>Nama :".$_POST['nama']."</center><br>"; //mengambil data dari input nama dan memunculkannya
  echo "<center>Email :".$_POST['email']."</center><br>"; //mengambil data dari input email dan memunculkannya
  echo "Login Pada Tanggal : ". $date . "<br>"; //mengambil data dari variabel date
  echo "Login Pada Waktu : ". $time; //mengambil data dari variabel waktu
}
?>
