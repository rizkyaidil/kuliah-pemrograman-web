<?php

$username = $_GET['username'];

// Memeriksa apakah pengguna telah login
if ($username != 'admin') {
  $username = $_GET['username'];

  header('Location: login.php'); // Redirect ke halaman login jika belum login
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Dashboard</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $username; ?>!</h1>
    <p>Ini adalah halaman dashboard Anda.</p>
    <a href="index.php">Logout</a>
</body>
</html>