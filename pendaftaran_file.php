<?php
require_once 'koneksi.php';
session_start();
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
$data_mhs = get_data("SELECT * FROM mahasiswa INNER JOIN detail_mahasiswa ON detail_mahasiswa.id_mhs=mahasiswa.id_mahasiswa 
INNER JOIN kategory_program ON kategory_program.id_program=mahasiswa.program
INNER JOIN fakultas ON fakultas.id_fakultas=mahasiswa.fakultas
INNER join jurusan ON jurusan.id_jurusan=mahasiswa.jurusan
WHERE mahasiswa.id_mahasiswa=" . $_SESSION["id_user"]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-content: baseline;
    }

    .container .header {
      display: flex;
      flex-direction: row;
      border-bottom: 2px solid black;
    }

    .header .img {
      display: flex;
      justify-content: flex-start;
    }

    .header .header-file {
      display: flex;
      flex: 1;
      justify-content: center;
    }

    .header-file h4 {
      font-size: 20px;
      text-align: center;
    }

    .conten {
      display: flex;
      margin: 5px;
      flex-direction: column;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      text-align: left;
      padding: 8px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="img">
      </div>
      <div class="header-file">
        <h4>Formulir pendaftaran</h4>
        <h4>Universitas Seoul Ub</h4>
      </div>
    </div>
    <div class="conten">
      <div class="data_user">

        <table>
          <tr>
            <th>Nama Mahasiswa:</th>
            <?php foreach ($data_mhs as $key) : ?>
              <td><?= $key["nama_lengkap"] ?></td>
          </tr>
          <tr>
            <th>Nim:</th>
            <td><?= $key["nim_mahasiswa"] ?></td>
          </tr>
          <tr>
            <th>Tempat Lahir:</th>
            <td><?= $key["tempat_lahir"] ?></td>
          </tr>
          <tr>
            <th>Tanggal Lahir:</th>
            <td><?= $key["tanggal_lahir"] ?></td>
          </tr>
          <tr>
            <th>Jenis Kelamin:</th>
            <td><?= $key["jenis_kelamin"] ?></td>
          </tr>
          <tr>
            <th>Alamat:</th>
            <td><?= $key["alamat"] ?></td>
          </tr>
          <tr>
            <th>Nomor Telofon:</th>
            <td><?= $key["nomor"] ?></td>
          </tr>
          <tr>
            <th>Email:</th>
            <td><?= $key["email"] ?></td>
          </tr>
          <tr>
            <th>Program Dituju:</th>
            <td><?= $key["nama_program"] ?></td>
          </tr>
          <tr>
            <th>Fakultas Dituju:</th>
            <td><?= $key["nama_fakultas"] ?></td>
          </tr>
          <tr>
            <th>Jurusan Dituju:</th>
            <td><?= $key["nama_jurusan"] ?></td>
          </tr>
          <tr>
            <th>Asal Sekolah:</th>
            <td><?= $key["asal_sekolah"] ?></td>
          </tr>
          <tr>
            <th>Jurusan Sekolah:</th>
            <td><?= $key["jurusan_sekolah"] ?></td>
          </tr>
          <tr>
            <th>Provinsi Sekolah:</th>
            <td><?= $key["provinsi_sekolah"] ?></td>
          <?php endforeach; ?>
          </tr>
        </table>

      </div>
    </div>
  </div>
</body>

</html>