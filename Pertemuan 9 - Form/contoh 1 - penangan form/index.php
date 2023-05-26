<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post" name="input">
    NIM Anda: <input type="text" name="nim"><br>
    Nama Anda: <input type="text" name="nama"><br>
    <input type="submit" name="input" value="Input">
  </form>

  <?php 
    if (isset($_POST['input'])) {
      $nim = $_POST['nim'];
      $nama = $_POST['nama'];
      echo "NIM Anda : <b>$nim</b><br>";
      echo "Nama Anda : <b>$nama</b>";
    }
  ?>
</body>
</html>