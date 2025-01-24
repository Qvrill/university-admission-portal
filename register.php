<?php
require_once 'koneksi.php';
function get_data($query)
{
  global $conn;
  $data = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($data)) {
    $rows[] = $row;
  }
  return $rows;
}
function query($query)
{
  global $conn;
  $query = mysqli_query($conn, $query);
  $reslut = mysqli_affected_rows($conn);
  return $reslut;
}
$data = get_data("SELECT *
FROM kategory_program");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="css/regisr.css" />
</head>

<body>
  <div class="container">
    <div class="title">Registation</div>
    <form action="prosesdaftar.php" method="POST" enctype="multipart/form-data">
      <div class="user-details">
        <div class="input-box">
          <span class="details">Full Name</span>
          <input type="text" placeholder="Enter your Name" name="nama" required />
        </div>
        <div class="input-box">
          <span class="details">tempat lahir</span>
          <input type="text" name="tempat" required />
        </div>
        <div class="input-box">
          <span class="details">tanggal lahir</span>
          <input type="date" name="tanggal" required />
        </div>
        <div class="input-box">
          <span class="details">jenis Kelamin</span>
          <select name="jk" id="">
            <option value="1">Laki-Laki</option>
            <option value="2">Wanita</option>
          </select>
        </div>
        <div class="input-box">
          <span class="details">alamat lengkap</span>
          <input type="text" name="alamat" required />
        </div>
        <div class="input-box">
          <span class="details">Nomor Whatssap</span>
          <input type="text" name="nomor" required />
        </div>
        <div class="input-box">
          <span class="details">Email</span>
          <input type="text" placeholder="Enter your Email" name="email" required />
        </div>
        <div class="input-box">
          <span class="details">Password</span>
          <input type="passsword" placeholder="Enter your Password" name="password" required />
        </div>
        <div class="input-box">
          <span class="details">Foto</span>
          <input type="file" name="foto" />
        </div>
      </div>
      <div class="input-box">
        <span class="details">Program</span>
        <select name="program" id="program">
          <option value="">PILIH</option>
          <?php foreach ($data as $program) : ?>
            <option value="<?= $program["id_program"] ?>"><?= $program["nama_program"] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="input-box">
        <span class="details">Fakultas</span>
        <select name="fakultas" id="fakultas">
          <option value="">Pilih</option>
        </select>
      </div>
      <div class="input-box">
        <span class="details">Jurusan</span>
        <select name="jurusan" id="jurusan">
        </select>
      </div>
      <div class="button">
        <input type="submit" value="Register" />
      </div>
    </form>
  </div>
</body>
<script>
  let program = document.getElementById('program');
  let list_fakultas = document.getElementById('fakultas');
  let jurusan = document.getElementById('jurusan');
  let objjax;

  function createobjjax() {
    if (window.XMLHttpRequest) {
      return new XMLHttpRequest();
    }
    if (window.ActiveXObject) {
      return new ActivateXObject("Microsoft.XMLHTTP");
    }
    return null;
  }
  program.addEventListener("change", (event) => {
    let list_program = document.getElementById('program').value;
    objjax = createobjjax();
    var url = "get.php";
    url = url + "?type=1";
    url = url + "&itemFakultas=" + list_program;
    objjax.onreadystatechange = showfakultas;
    objjax.open("GET", url, true);
    objjax.send(null);
  })

  function showfakultas() {
    if (objjax.readyState == 4) {
      list_fakultas.innerHTML = objjax.responseText;
      return false;
    }
  }


  list_fakultas.addEventListener("change", (event) => {
    let list_program = document.getElementById('fakultas').value;
    objjax = createobjjax();
    var url = "get.php";
    url = url + "?type=2";
    url = url + "&itemFakultas=" + list_program;
    objjax.onreadystatechange = showjurusan;
    objjax.open("GET", url, true);
    objjax.send(null);
  })

  function showjurusan() {
    if (objjax.readyState == 4) {
      jurusan.innerHTML = objjax.responseText;
      return false;
    }
  }
</script>

</html>