<?php
require_once 'koneksi.php';
function query($query)
{
  global $conn;
  $query = mysqli_query($conn, $query);
  $reslut = mysqli_affected_rows($conn);
  return $reslut;
}
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
$data = get_data("SELECT * FROM mahasiswa INNER JOIN fakultas ON fakultas.id_fakultas=mahasiswa.fakultas INNER JOIN jurusan ON jurusan.id_jurusan=mahasiswa.jurusan INNER JOIN
kategory_program ON kategory_program.id_program=mahasiswa.program WHERE id_mahasiswa=" . $_SESSION["id_user"]);

if (query("SELECT * FROM detail_mahasiswa WHERE id_mhs=" . $_SESSION["id_user"]) == 0) {
  require_once 'template_user.php';
} else {
  require_once 'selesai.php';
}
