<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Konversi Tipe</title>
  </head>
  <body>
    <?php
      //deklarasi variabel
      $a = 300.4;
      //mencetak tulisan
      echo $a;
      echo "<br>";
      //syntax untuk merubah tipe data
      echo "tipe Double : ", doubleval($a), "<br>";
      echo "tipe Integer : ", intval($a), "<br>";
      echo "tipe String : ", strval($a);
    ?>
  </body>
</html>
