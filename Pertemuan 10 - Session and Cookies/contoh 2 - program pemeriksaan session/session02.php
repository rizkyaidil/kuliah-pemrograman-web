<?php
  session_start();

  // pemeriksaan session
  if (isset($_SESSION['login'])) { // jika sudah login
    echo "<h1>Selamat Datang ". $_SESSION['login'] . "</h1>";
    echo "<h2>Halaman ini hanya bisa kita akses jika anda sudah login</h2>";
    echo "<h2>Klik <a href='session03.php'>disini
          (session03.php)</a> untuk LOGOUT</h2>";
  } else {
    // session belum ada artinya belum login
    die("Anda belum login! Silahkan login <a href='session.php'> disini</a>");
  }
?>