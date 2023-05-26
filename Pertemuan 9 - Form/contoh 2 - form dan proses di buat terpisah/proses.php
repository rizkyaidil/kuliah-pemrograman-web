<?php 
  if (isset($_POST['input'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    echo "NIM Anda : <b>$nim</b><br>";
    echo "Nama Anda : <b>$nama</b>";
  }
?>