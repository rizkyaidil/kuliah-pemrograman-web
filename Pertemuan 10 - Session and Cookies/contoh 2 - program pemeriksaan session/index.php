<?php
  session_start();

  if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // periksa login
    if ($user == "Agi" && $pass == "123456") {
      // membuat session
      $_SESSION['login'] = $user;

      // menuju ke halaman pemeriksaan session
      echo "<h1>Selamat anda berhasil login!!</h1>";
      echo "Klik <a href='session02.php'>disini (session02.php)</a>
            untuk menuju ke halaman pemeriksaan session";
    }
  } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Here</title>
</head>
<body>
  <form action="" method="post">
    <h2>Login here...</h2>
    Username : <input type="text" name="user"><br>
    Password : <input type="password" name="pass"><br>
    <input type="submit" name="login" value="Log In">
  </form>
</body>
</html>

<?php } ?>