<?php

class PDF extends FPDF{

$pdf=new PDF('P','mm','A4');

//Define Alias For Total Number of Pages
//$pdf->AliasNbPages('{pages}');

$pdf->AddPage();

$pdf->SetFont('Helvetica','',9);
$pdf->SetDrawColor(50,50,100);

//Dummmy Cell to give spacing
     $pdf->Ln(25);
     $pdf->SetFont('Helvetica','B',12);
     $pdf->SetFillColor(180,180,255);
     $pdf->SetDrawColor(50,50,100);
//Draw Table
    $pdf->Cell(25,5,'Name',1,0,'',true);
    $pdf->Cell(60,5,$student['student_ID'],1,0,'',true);
    $pdf->Cell(15,5,'',0,0,'',true);
    $pdf->Cell(25,5,'Surname',1,0,'',true);
    $pdf->Cell(65,5,$student['student_ID'],1,1,'',true);

    //Dummmy Cell to give spacing
     $pdf->Ln(2);
  
    $pdf->Cell(20,5,'Year',1,0,'',true);
    $pdf->Cell(30,5,'',1,0,'',true);
    $pdf->Cell(15,5,'',0,0,'',true);
    $pdf->Cell(20,5,'Term',1,0,'',true);
    $pdf->Cell(40,5,'',1,0,'',true);
    $pdf->Cell(15,5,'',0,0,'',true);
    $pdf->Cell(20,5,'Form',1,0,'',true);
    $pdf->Cell(30,5,$student['form_ID'],1,1,'',true);


//Dummmy Cell to give spacing
     $pdf->Ln(2);
  
    $pdf->Cell(30,5,'Attendance',1,0,'',true);
    $pdf->Cell(30,5,'',1,0,'',true);
    $pdf->Cell(5,5,'',0,0,'',true);
    $pdf->Cell(36,5,'Average Mark(%)',1,0,'',true);
    $pdf->Cell(30,5,$student['Mark'],1,0,'',true);
    $pdf->Cell(5,5,'',0,0,'',true);
    $pdf->Cell(30,5,'Total Points',1,0,'',true);
    $pdf->Cell(25,5,'',1,1,'',true);

    //Dummmy Cell to give spacing
     $pdf->Ln(5);

     //Draw Table
    $pdf->Cell(40,5,'Subject',1,0,'',true);
    $pdf->Cell(30,5,'Course Mark',1,0,'',true);
    $pdf->Cell(20,5,'Grade',1,0,'',true);
    $pdf->Cell(100,5,'Teachers Remarks',1,1,'',true);

}

    
?>