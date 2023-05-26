<?php
session_start();

// Daftar pengguna terdaftar
$userTerdaftar = array(
    array('username' => 'admin', 'password' => 'admin', 'name' => 'Admin'),
    array('username' => 'rizky', 'password' => 'aidil', 'name' => 'Rizky Aidil')
);

// Fungsi untuk memeriksa kecocokan username dan password
function cekAkun($username, $password) {
    global $userTerdaftar;
    foreach ($userTerdaftar as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            return $user;
        }
    }
    return false;
}

// Pengecekan apakah pengguna sudah login
if (isset($_SESSION['username'])) {
    header('Location: index.php'); // Redirect ke halaman dashboard jika pengguna sudah login
    exit();
}

// Pengecekan apakah pengguna sudah login menggunakan cookie
if (isset($_COOKIE['login_info'])) {
    $username = base64_decode($_COOKIE['login_info']);
    $user = cekAkun($username, $password);

    if ($user) {
        // Menyimpan data pengguna dalam session
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'];
        header('Location: index.php'); // Redirect ke halaman dashboard jika pengguna sudah login
        exit();
    }
}

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Memeriksa kecocokan username dan password
    $user = cekAkun($username, $password);

    if ($user) {
        // Menyimpan data pengguna dalam session
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'];

        // Mengatur cookie untuk menyimpan informasi login
        $cookieName = 'login_info';
        $cookieValue = base64_encode($user['username']);
        setcookie($cookieName, $cookieValue, time() + (86400 * 30), '/'); // Cookie berlaku selama 30 hari
        header('Location: index.php'); // Redirect ke halaman dashboard setelah login berhasil
        exit();
    } else {
        $errorMessage = 'Username atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h2>Silakan login</h2>
    <?php if (isset($errorMessage)) { ?>
        <p><?php echo $errorMessage; ?></p>
    <?php } ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
