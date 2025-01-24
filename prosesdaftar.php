<?php
require_once "koneksi.php";
function query($query)
{
    global $conn;
    $query = mysqli_query($conn, $query);
    $reslut = mysqli_affected_rows($conn);
    return $reslut;
}
$nama_mhs = $_POST["nama"];
$tempat_lahir = $_POST["tempat"];
$tanggal = $_POST["tanggal"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$no = $_POST["nomor"];
$email = $_POST["email"];
$pas = $_POST["password"];
$program = $_POST["program"];
$fakultas = $_POST["fakultas"];
$jursan = $_POST["jurusan"];
$error = $_FILES["foto"]["error"];
$tmp_name = $_FILES["foto"]["tmp_name"];
$nim = 41522010;
if ($error == 4) {
    $nim++;
    $nama_foto = "deflaut.png";
    if (query("INSERT INTO mahasiswa VALUES('','$nim','$nama_mhs','$tempat_lahir','$tanggal','$jk','$alamat','$no','$email','$pas','$program','$fakultas','$jursan','$nama_foto')") > 0) {
        header("Location: http://localhost/avrilfix/sign-up.php");
    }
} else {
    $nama_foto = rand() . $_FILES["foto"]["name"];
    if (query("INSERT INTO mahasiswa VALUES('','$nim','$nama_mhs', '$tempat_lahir',$tanggal,'$jk','$alamat','$no','$email','$pas','$program','$fakultas','$jursan','$nama_foto')") > 0) {
        move_uploaded_file($tmp_name, 'img/fp/' . $nama_foto);
        header("Location: http://localhost/avrilfix/sign-up.php");
    }
}
