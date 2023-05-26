<?php
  if (isset($_POST['pilih'])) {
    $kota = $_POST['kota'];
    echo "Kota Asal Anda adalah
          <b><font color='green'>$kota</font></b>";
  }
?>