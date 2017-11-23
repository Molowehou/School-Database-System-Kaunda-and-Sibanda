<?php
require __DIR__. '/../fpdf/fpdf.php';
require_once __DIR__. '/../inc/bootstrap.php';

class PDF extends FPDF
{
  function Header()
    {
      $this->Image('logo.png',10,8,20);
      $this->SetFont('Helvetica','B',15);
      $this->SetXY(50, 10);
      //Report Name
      $this->Cell(0,10,'All Student Details',1,0,'C');

//Dummmy Cell to give spacing
     $this->Ln(25);
     $this->SetFont('Helvetica','B',12);
     $this->SetFillColor(180,180,255);
     $this->SetDrawColor(50,50,100);
//Draw Table
    $this->Cell(25,5,'Student No.',1,0,'',true);
    $this->Cell(70,5,'Name',1,0,'',true);
    $this->Cell(70,5,'Surname Name',1,0,'',true);
    $this->Cell(30,5,'Class',1,1,'',true);
  
     }

  function Footer()
    {
      $this->SetXY(100,-15);
      $this->SetFont('Helvetica','I',10);
      $this->Cell(0,10,'Page '.$this->PageNo()." of {pages}",0,0,'C');
      $this->Write (5, 'School Management System');
    }
}

$pdf=new PDF('P','mm','A4');

//Define Alias For Total Number of Pages
$pdf->AliasNbPages('{pages}');

$pdf->AddPage();

$pdf->SetFont('Helvetica','',9);
$pdf->SetDrawColor(50,50,100);

foreach (getAllStudents() as $student) {
	
    $pdf->Cell(25,5,$student['studentID'],1,0);
    $pdf->Cell(70,5,$student['studentFirstName'],1,0);
    $pdf->Cell(70,5,$student['studentLastName'],1,0);
    $pdf->Cell(30,5,$student['Form'].$student['Class'],1,1);

}

$pdf->Output();
?>



