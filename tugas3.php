<?php
  //deklarasi variabel
  $nama = ["Adi", "Budi", "Charlie"];
  $email = ["adi@gmail.com", "budi@gmail.com", "charlie@gmail.com"];
  // cetak dengan loop
  for ($i=0; $i < count($nama); $i++) {
      echo "<center> Nama Mahasiswa ke-".($i+1)." : ".$nama[$i]."</center><br>";
      echo "<center> Email Mahasiswa ke-".($i+1)." : ".$email[$i]."</center><br>";
  }
 ?>
