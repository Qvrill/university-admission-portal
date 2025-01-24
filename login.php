<?php
session_start();
require_once 'koneksi.php';
$username = $_POST["email"];
$pw = $_POST["pas"];
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

$cek = "SELECT * FROM mahasiswa WHERE email='$username' AND password='$pw'";
if (query($cek) > 0) {
    $data_us = get_data("SELECT * FROM mahasiswa  WHERE mahasiswa.email='$username'");
    foreach ($data_us as $key) {

        $_SESSION['id_user'] = $key['id_mahasiswa'];
        $_SESSION['nama_user'] = $key['nama_lengkap'];
        $_SESSION['email'] = $key["email"];
        $_SESSION['foto'] = $key["foto"];
        header('Location:http://localhost/avrilfix/user.php');
    }
} else {
    header("Location:http://localhost/avrilfix/sign-up.php");
}

if (isset($_GET['out']) == 1) {
    session_destroy();
    redirect('http://localhost/tb_web/page/login.php');
}
