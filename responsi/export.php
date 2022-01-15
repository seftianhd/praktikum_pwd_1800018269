<?php

// memanggil library FPDF
require('fpdf/fpdf.php');

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');

// membuat halaman baru
$pdf->AddPage();

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);

// mencetak string 
$pdf->Cell(190, 7, 'SD N GADINGHARJO', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'DAFTAR PENGGUNA', 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 6, 'id', 1, 0);
$pdf->Cell(50, 6, 'username', 1, 0);
$pdf->Cell(30, 6, 'email', 1, 1);
$pdf->SetFont('Arial', '', 10);
include 'koneksi.php';

$user = mysqli_query($con, "select * from user");
while ($row = mysqli_fetch_array($user)) {
    $pdf->Cell(20, 6, $row['id'], 1, 0);
    $pdf->Cell(50, 6, $row['username'], 1, 0);
    $pdf->Cell(30, 6, $row['email'], 1, 1);
}
$pdf->Output();
