<?php  //deklarasi skrip php
if (empty($_POST['nama'])) { //seleksi kondisi apakah form nama kosong
  header("Location:praktikum1_kosong.php"); //redirect ke file lain
} else {
  echo "<center>Nama :". $_POST['nama']."</center><br>"; //menampilan post nama
}
 ?>
