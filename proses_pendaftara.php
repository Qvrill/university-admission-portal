<?php
require_once 'koneksi.php';
function query($query)
{
    global $conn;
    $query = mysqli_query($conn, $query);
    $reslut = mysqli_affected_rows($conn);
    return $reslut;
}
$asal_sekolah = $_POST["asal-sekolah"];
$prov = $_POST["prov"];
$jurusan = $_POST["tingkat-pendidikan"];
$id_mahasiswa = $_POST["id_mahasiswa"];
$ijasah = [
    "nama_file" => "",
    "tmp_name" => $_FILES["izasah"]["tmp_name"],
    "error" => $_FILES["izasah"]["error"]
];
$skl = [
    "nama_file" => "",
    "tmp_name" => $_FILES["skl"]["tmp_name"],
    "error" => $_FILES["skl"]["error"]
];
if ($ijasah["error"] == 4) {
    $ijasah["nama_file"] = "deflaut.png";
} else {
    $ijasah["nama_file"] = rand() . $_FILES["izasah"]["name"];
    move_uploaded_file($ijasah["tmp_name"], 'ijasah/' . $ijasah["nama_file"]);
}
if ($skl["error"] == 4) {
    $skl["nama_file"] = "deflaut.png";
} else {
    $skl["nama_file"] = rand() . $_FILES["izasah"]["name"];
    move_uploaded_file($skl["tmp_name"], 'skl/' . $skl["nama_file"]);
}
if (query("INSERT INTO detail_mahasiswa VALUES('','$id_mahasiswa','$asal_sekolah','$prov','$jurusan','{$ijasah["nama_file"]}','{$skl["nama_file"]}','1')") > 0) {
    $_SESSION["status_pendaftaran"] = 1;
    header("Location:http://localhost/avrilfix/user.php");
} else {
    header("Location:http://localhost/avrilfix/user.php");
}
