<?php
session_start();
require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

$nama_file = $_SESSION["nama_user"] . '.pdf';
// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
require_once 'pendaftaran_file.php';
$html = ob_get_clean();
$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($nama_file);
