<?php
  $nilai = 75;
  printf("Nilai = %.2f<br>", $nilai);
  echo "keterangan: <br>";
  
  if ($nilai >= 60) {
    echo "Karena nilai anda $nilai, maka anda LULUS";
  } else {
    echo "Karena nilai anda $nilai, maka anda GAGAL";
  }