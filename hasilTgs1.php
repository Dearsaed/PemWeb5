<?php
  include "dataDiri.php";
  if (empty($_POST['nama']) || empty($_POST['email'])){
    header("Location:tugas2.php");
  } elseif ($_POST['nama'] == $nama && $_POST['email'] == $email) {
    echo "<center>Nama : ".$_POST['nama']."</center><br>";
    echo "<center>Email : ".$_POST['email']."</center><br>";
    echo "<center>".date("g:i:s a, D, m-F-Y")."</center><br>";
  } else{
    echo "<center>Akun Tidak Terdaftar</center><br>";
  }
?>
