<?php
  $nim = "2214370473";
  $nama = "Rizky Aidil";
  $umur = 20;
  $nilai = 90;
  $status = false;

  echo "NIM : " . $nim . "<br>";
  echo "Nama : " . $nama . "<br>";

  print "Umur : $umur.";
  print "<br>";
  printf("Nilai : %.2f<br>", $nilai);
  if ($status) {
    echo "Status : Aktif";
  } else {
    echo "Status : Tidak aktif";
  }
?>
