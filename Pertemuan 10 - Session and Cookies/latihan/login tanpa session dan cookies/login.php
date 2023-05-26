<?php
// Pengguna terdaftar
$userTerdaftar = array(
    'username' => 'admin',
    'password' => 'admin',
    'name' => 'Admin'
);

// Fungsi untuk memeriksa kecocokan username dan password
function cekAkun($username, $password) {
    global $userTerdaftar;
    if ($userTerdaftar['username'] === $username && $userTerdaftar['password'] === $password) {
        return $userTerdaftar;
    }
    return false;
}

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Memeriksa kecocokan username dan password
    $user = cekAkun($username, $password);

    if ($user) {
        header('Location: index.php?username='. $username); // Redirect ke halaman dashboard setelah login berhasil
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
