<?php
  if (isset($_COOKIE['username'])) {
    echo "<h1>Cookie 'username' ada. <br> Isinya : " .
    $_COOKIE['username'];
  } else {
    echo "<h1>Cookie 'username' Tidak ada.</h1>";
  }

  if (isset($_COOKIE['namalengkap'])) {
    echo "<h1>Cookie 'namalengkap' ada. <br> Isinya : " .
    $_COOKIE['namalengkap'];
  } else {
    echo "<h1>Cookie 'namalengkap' Tidak ada.</h1>";
  }
  echo "<h2>Klik <a href='cookies3.php'>disini</a>
  untuk penghapusan cookies</h2>"
?>