<?php
require_once 'koneksi.php';
$type = $_GET["type"];
$itemProvince = $_GET["itemFakultas"];
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
$data_fakultas = get_data("SELECT fakultas.nama_fakultas,fakultas.program,fakultas.id_fakultas,jurusan.nama_jurusan,jurusan.id_jurusan,jurusan.fakultas,jurusan.program FROM fakultas INNER JOIN jurusan  ON jurusan.id_jurusan=fakultas.id_fakultas INNER JOIN kategory_program  ON kategory_program.id_program=jurusan.program WHERE fakultas.program=" . $itemProvince);
$pecah_data = [$data_fakultas["program"]];


if ($type == 1) {

    foreach ($data_fakultas as $data) {
        echo "<option value='{$data["id_fakultas"]}'selected>{$data["nama_fakultas"]}</option>";
    }
} elseif ($type == 2) {

    foreach ($data_fakultas as $data) {
        if ($itemProvince == intval($data["fakultas"])) {
            echo "<option value='{$data["id_jurusan"]}' selected>{$data["nama_jurusan"]}</option>";
        }
    }
}
