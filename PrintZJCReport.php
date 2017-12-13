
 <?php
   require __DIR__ . '/inc/bootstrap.php';
   require __DIR__. '/fpdf/fpdf.php';
   //requireAuth();
    require_once __DIR__ . '/inc/head.php';
  ?>
  

  <?php
    require_once __DIR__ . '/inc/header.php';
   ?>

    
    <?php
         require_once __DIR__ . '/inc/nav.php';
    ?>

	<main>
		<div class="main-content"> <!--main content-->




      
      <?php
	      foreach (getExerciseByExerciseID(2) as $student) {
   

         // require_once __DIR__ . '/Reports/report.php';
          $pdf = new FPDF();
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
    $pdf->Cell(60,5,$student['studentFirstName'],1,0,'',true);
    $pdf->Cell(15,5,'',0,0,'',true);
    $pdf->Cell(25,5,'Surname',1,0,'',true);
    $pdf->Cell(65,5,$student['studentLastName'],1,1,'',true);

    //Dummmy Cell to give spacing
     $pdf->Ln(2);
  
    $pdf->Cell(20,5,'Year',1,0,'',true);
    $pdf->Cell(30,5,'2018',1,0,'',true);
    $pdf->Cell(15,5,'',0,0,'',true);
    $pdf->Cell(20,5,'Term',1,0,'',true);
    $pdf->Cell(40,5,'1',1,0,'',true);
    $pdf->Cell(15,5,'',0,0,'',true);
    $pdf->Cell(20,5,'Form',1,0,'',true);
    $pdf->Cell(30,5,$student['class_ID'],1,1,'',true);


//Dummmy Cell to give spacing
     $pdf->Ln(2);
  
    $pdf->Cell(30,5,'Attendance',1,0,'',true);
    $pdf->Cell(30,5,'',1,0,'',true);
    $pdf->Cell(5,5,'',0,0,'',true);
    $pdf->Cell(36,5,'Average Mark(%)',1,0,'',true);
    $pdf->Cell(30,5,'',1,0,'',true);
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





          $pdf->SetFont('Arial','B',16);
          $pdf->Cell(40,10,$student['studentFirstName']);
          $pdf->Cell(40,10,$student['student_ID']);
          $pdf->Cell(40,10,$student['studentFirstName']);
          $pdf->Cell(40,5,$student['Topic'],1,0);
          $pdf->Cell(30,5,$student['Mark'],1,0);
          $pdf->Cell(20,5,$student['Comment'],1,0);
          $pdf->Cell(100,5,$student['Comment'],1,1); 
         
         $pdf->Output('F',$student['student_ID']);

         }

         ?>



             


				
		</div> <!--/main content-->
	</main>
			

		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>