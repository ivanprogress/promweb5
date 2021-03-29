<?php
if (empty($_POST['nama']) || empty($_POST['alamat']) || empty($_POST['kelamin']) || empty($_POST['negara']) || empty($_POST['pendidikan'])) {
  header("Location:tugas2_kosong.php"); //redirect ke link
} else {
  include 'tugas3_inc.php'; //mengambil data dari file lain
  echo "<center>Nama :".$_POST['nama']."</center><br>"; //mengambil data dari input nama dan memunculkannya
  echo "<center>Email :".$_POST['alamat']."</center><br>"; //mengambil data dari input alamat dan memunculkannya
  echo "<center>Email :".$_POST['kelamin']."</center><br>"; //mengambil data dari input kelamin dan memunculkannya
  echo "<center>Email :".$_POST['negara']."</center><br>";  //mengambil data dari input negara dan memunculkannya
  echo "<center>Email :".$_POST['pendidikan']."</center><br>"; //mengambil data dari input pendidikan dan memunculkannya
  echo "Mendaftar Pada Tanggal : ". $date . "<br>"; //mengambil data dari variabel date
  echo "Mendaftar Pada Waktu : ". $time; //mengambil data dari variabel waktu
}
?>
