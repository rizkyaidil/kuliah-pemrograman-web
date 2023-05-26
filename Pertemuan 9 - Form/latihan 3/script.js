function validateForm() {
  var nama = document.forms["input"]["nama"].value;
  if (nama == "") {
    alert("Anda belum mengisi nama");
    return false;
  }
  return confirm('Apakah Anda yakin sudah benar?');
}