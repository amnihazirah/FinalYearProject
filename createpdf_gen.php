<?php
session_start();
require_once 'FPDF/fpdf.php';
require_once 'db_conn.php';


$sql = "select * from users";
//$data = mysqli_query($conn, $sql);
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial', '', 16);

$pdf->Cell(55, 5, 'Name', 0, 0);
$pdf->Cell(55, 5, ': Amni', 0, 1);

$pdf->Cell(55, 5, 'Date', 0, 0);
$pdf->Cell(55, 5, ': 14/1/2021', 0, 1);

$pdf->Cell(55, 5, 'Activity', 0, 0);
$pdf->Cell(55, 5, ': Lecture', 0, 1);

$pdf->Cell(55, 5, 'Time Start', 0, 0);
$pdf->Cell(55, 5, ': 10:00 AM', 0, 1);

$pdf->Cell(55, 5, 'Time End', 0, 0);
$pdf->Cell(55, 5, ': 12:00 PM', 0, 1);

$pdf->Cell(55, 5, 'Heart rate', 0, 0);
$pdf->Cell(55, 5, ': 80', 0, 1);

$pdf->Cell(55, 5, 'Mood', 0, 0);
$pdf->Cell(55, 5, ': Normal', 0, 1);

$pdf->Output();

?>