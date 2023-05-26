<?php
  if (isset($_POST['pilih'])) {
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $gender     = $_POST['gender'];
    $asal       = $_POST['asal'];
    $tel        = $_POST['tel'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $deskripsi  = $_POST['deskripsi'];
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Registrasi</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h2>Hasil Registrasi</h2>
  <div class="container">
    <table class="table">
      <tr>
        <td>NIM</td>
        <td>:</td>
        <td><?= $nim ?></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $nama ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?= $gender ?></td>
      </tr>
      <tr>
        <td>Asal</td>
        <td>:</td>
        <td><?= $asal ?></td>
      </tr>
      <tr>
        <td>Nomor Telephone</td>
        <td>:</td>
        <td><?= $tel ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><?= $email ?></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><?= $password ?></td>
      </tr>
      <tr>
        <td>Hobby</td>
        <td>:</td>
        <td>
          <ul>
            <?php
              for ($i = 1; $i <= 6; $i++) {
                if (isset($_POST['hobby' . $i])) {
                  echo "<li>" . $_POST['hobby' . $i] . "</li>";
                }
              }
            ?>
          </ul>
        </td>
      </tr>
      <tr>
        <td>Deskripsi Diri</td>
        <td>:</td>
        <td><?= $deskripsi ?></td>
      </tr>
    </table>
  </div>

</body>
</html>