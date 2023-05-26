<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h2>Form Registrasi</h2>
  <form action="hasil-registrasi.php" method="post">
    <table class="table">
      <tr>
        <td>NIM</td>
        <td>:</td>
        <td><input type="text" name="nim" placeholder="Masukkan NIM Anda (10 digit)" minlength="10" maxlength="10" pattern="[0-9]{10}" required/></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Masukkan Nama Anda" maxlength="100" required></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
          <input type="radio" name="gender" value="Laki-Laki" required>Laki-Laki
          <input type="radio" name="gender" value="Perempuan" required>Perempuan
        </td>
      </tr>
      <tr>
        <td>Asal</td>
        <td>:</td>
        <td>
          <select name="asal" required>
            <option selected disabled>-- Pilih --</option>
            <option value="Jawa Tengah">Jawa Tengah</option>
            <option value="Yogyakarta">Yogyakarta</option>
            <option value="Jawa Barat">Jawa Barat</option>
            <option value="Jawa Timur">Jawa Timur</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Nomor Telephone</td>
        <td>:</td>
        <td><input type="tel" name="tel" placeholder="example 081234568900" minlength="12" maxlength="12" pattern="[0-9]{12}" required></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" name="email" placeholder="example@example.com" maxlength="100" required></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="Masukkan Password Anda (minimal 6 digit)" minlength="6" maxlength="64" required></td>
      </tr>
      <tr>
        <td>Hobby</td>
        <td>:</td>
        <td>
          <div class="hobby-container">
            <div>
              <input type="checkbox" name="hobby1" value="Sepak Bola">Sepak Bola<br>
              <input type="checkbox" name="hobby2" value="Membaca">Membaca<br>
              <input type="checkbox" name="hobby3" value="Beranang">Beranang
            </div>
            <div>
              <input type="checkbox" name="hobby4" value="Futsal">Futsal<br>
              <input type="checkbox" name="hobby5" value="Jogging">Jogging<br>
              <input type="checkbox" name="hobby6" value="nGoWes">nGoWes
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>Deskripsi Diri</td>
        <td>:</td>
        <td><textarea name="deskripsi" cols="30" rows="10" placeholder="Masukkan Deskripsi Diri Anda" maxlength="500" required></textarea></td>
      </tr>
    </table>
    <div class="action">
      <input type="submit" name="pilih" value="Ok" onclick="return confirm('Apakah anda yakin sudah benar?')">
      <input type="reset" value="Reset">
    </div>
  </form>
</body>
</html>