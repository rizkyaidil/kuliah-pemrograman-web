<?php
session_start();

// Memeriksa apakah pengguna telah login
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('Location: login.php'); // Redirect ke halaman login jika tidak ada sesi aktif
    exit();
}

// Mengambil data pengguna dari session
$username = $_SESSION['username'];
$name = $_SESSION['name'];

// Mengambil data pengguna dari cookie
$cookieName = 'login_info';
if (isset($_COOKIE[$cookieName])) {
    $cookieValue = base64_decode($_COOKIE[$cookieName]);
    // Gunakan nilai cookie untuk operasi yang sesuai, misalnya mengambil data pengguna dari basis data
    // Contoh sederhana, menampilkan data pengguna dari cookie
    $usernameFromCookie = $cookieValue;
} else {
    $usernameFromCookie = 'Tidak tersedia';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $name; ?>!</h2>
    <p>Username: <?php echo $username; ?></p>
    <p>Username dari Cookie: <?php echo $usernameFromCookie; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
