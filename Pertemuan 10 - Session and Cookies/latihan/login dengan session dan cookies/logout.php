<?php
  session_start();

  // Menghapus semua data session
  session_unset();
  session_destroy();

  // Menghapus cookie yang terkait dengan login
  $cookieName = 'login_info';
  if (isset($_COOKIE[$cookieName])) {
      unset($_COOKIE[$cookieName]);
      setcookie($cookieName, '', time() - 3600, '/');
  }

  header('Location: login.php'); // Redirect ke halaman login setelah logout
  exit();
?>