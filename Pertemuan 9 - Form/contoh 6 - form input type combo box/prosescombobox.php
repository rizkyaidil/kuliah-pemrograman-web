<?php
  if (isset($_POST['pilih'])) {
    $provinsi = $_POST['provinsi'];
    echo "Wilayah Provinsi Anda adalah :
          <font color='blue'>$provinsi</font>";
  }
?>