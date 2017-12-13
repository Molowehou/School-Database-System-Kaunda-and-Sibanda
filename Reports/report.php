


<?php


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$student['studentFirstName']);
$pdf->Cell(40,10,$student['studentFirstName']);
$pdf->Cell(40,10,$student['studentFirstName']);
// $pdf->Output();
