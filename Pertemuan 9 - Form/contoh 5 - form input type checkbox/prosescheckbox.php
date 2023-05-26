<?php
  if (isset($_POST['pilih'])) {
    echo "Hobby Anda adalah : <br>";
    if (isset($_POST['hobby1'])) {
      echo "+ " . $_POST['hobby1'] . "<br>";
    }
    if (isset($_POST['hobby2'])) {
      echo "+ " . $_POST['hobby2'] . "<br>";
    }
    if (isset($_POST['hobby3'])) {
      echo "+ " . $_POST['hobby3'] . "<br>";
    }
    if (isset($_POST['hobby4'])) {
      echo "+ " . $_POST['hobby4'] . "<br>";
    }
  }
?>