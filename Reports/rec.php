<?php
require('rounded_rect2.php');

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFillColor(300);
$pdf->RoundedRect(8,7, 195, 285,5, '1234', 'DF');
$pdf->Output();
?>