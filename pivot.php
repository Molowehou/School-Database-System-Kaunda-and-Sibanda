
 <?php
   require __DIR__ . '/inc/bootstrap.php';
   require __DIR__. '/fpdf/fpdf.php';
   //requireAuth();
    require_once __DIR__ . '/inc/head_2.php';
  ?>

  <?php
    require_once __DIR__ . '/inc/header.php';
   ?>
    
    <?php
         require_once __DIR__ . '/inc/nav.php';
    ?>

	<main>
		<div class="main-content"> <!--main content-->
	      <h5 class="section-title"><i class="pe-7s-home"></i>Pivot</h5>


    <?php
     foreach (getReportDetails()as $studentExam) {



      
       echo $studentExam['student_ID']."<br>";
       echo $studentExam['Accounts']."<br>";
       echo $studentExam['Accounts Comment']."<br>";

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
        $pdf->Cell(60,5,$studentExam['studentFirstName'],1,0,'',true);
        $pdf->Cell(15,5,'',0,0,'',true);
        $pdf->Cell(25,5,'Surname',1,0,'',true);
        $pdf->Cell(65,5,$studentExam['studentLastName'],1,1,'',true);

       //Dummmy Cell to give spacing
        $pdf->Ln(2);
  
        $pdf->Cell(20,5,'Year',1,0,'',true);
        $pdf->Cell(30,5,'2018',1,0,'',true);
        $pdf->Cell(15,5,'',0,0,'',true);
        $pdf->Cell(20,5,'Term',1,0,'',true);
        $pdf->Cell(40,5,'1',1,0,'',true);
        $pdf->Cell(15,5,'',0,0,'',true);
        $pdf->Cell(20,5,'Form',1,0,'',true);
        $pdf->Cell(30,5,$studentExam['student_ID'],1,1,'',true);


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
        $pdf->Cell(50,5,'Subject',1,0,'',true);
        $pdf->Cell(30,5,'Course Mark',1,0,'',true);
        $pdf->Cell(20,5,'Grade',1,0,'',true);
        $pdf->Cell(80,5,'Teachers Remarks',1,1,'',true);





          $pdf->SetFont('Arial','B',12);
          //Accounts
          $pdf->Cell(50,5,'Accounts',1,0,'');
          $pdf->Cell(30,5,$studentExam['Accounts'],1);
          $pdf->Cell(20,5,'',1);
          $pdf->Cell(80,5,$studentExam['Accounts Comment'],1,1);
          
          //Commerce
          $pdf->Cell(50,5,'Commerce',1,0,'');
          $pdf->Cell(30,5,$studentExam['Commerce'],1);
          $pdf->Cell(20,5,'',1);
          $pdf->Cell(80,5,$studentExam['Commerce Comment'],1,1);
          
          //Business Studies
          $pdf->Cell(50,5,'Business Studies',1,0,'');
          $pdf->Cell(30,5,$studentExam['Business Studies'],1);
          $pdf->Cell(20,5,'',1);
          $pdf->Cell(80,5,$studentExam['Business Studies Comment'],1,1);

          //Mathematics

          $pdf->Cell(50,5,'Mathematics',1,0,'');
          $pdf->Cell(30,5,$studentExam['Mathematics'],1);
          $pdf->Cell(20,5,'',1);
          $pdf->Cell(80,5,$studentExam['Mathematics Comment'],1,1);           
          //Geography
          $pdf->Cell(50,5,'Geography',1,0,'');
          $pdf->Cell(30,5,$studentExam['Geography'],1);
          $pdf->Cell(20,5,'',1);
          $pdf->Cell(80,5,$studentExam['Geography Comment'],1,1);                    
          //Ndebele
          $pdf->Cell(50,5,'Ndebele',1,0,'');
          $pdf->Cell(30,5,$studentExam['Ndebele'],1);
          $pdf->Cell(20,5,'',1);
          $pdf->Cell(80,5,$studentExam['Ndebele Comment'],1,1);
          
          //English
          $pdf->Cell(50,5,'English',1,0,'');
          $pdf->Cell(30,5,$studentExam['English'],1);
          $pdf->Cell(20,5,'',1);
          $pdf->Cell(80,5,$studentExam['English Comment'],1,1);          
          //Biology
          $pdf->Cell(50,5,'Biology',1,0,'');
          $pdf->Cell(30,5,$studentExam['Biology'],1);
          $pdf->Cell(20,5,'',1);
          $pdf->Cell(80,5,$studentExam['Biology Comment'],1,1);

          //Intergrated Science
         $pdf->Cell(50,5,'Intergrated Science',1,0,'');
         $pdf->Cell(30,5,$studentExam['Intergrated Science'],1);
         $pdf->Cell(20,5,'',1);
         $pdf->Cell(80,5,$studentExam['Intergrated Science Comment'],1,1);


        //Physics
        $pdf->Cell(50,5,'Physics',1,0,'');
        $pdf->Cell(30,5,$studentExam['Physics'],1);
        $pdf->Cell(20,5,'',1);
        $pdf->Cell(80,5,$studentExam['Physics Comment'],1,1); 



          //Chemistry
          $pdf->Cell(50,5,'Chemistry',1,0,'');
          $pdf->Cell(30,5,$studentExam['Chemistry'],1);
          $pdf->Cell(20,5,'',1);
          $pdf->Cell(80,5,$studentExam['Chemistry Comment'],1,1);

          //Zulu
          $pdf->Cell(50,5,'Zulu',1,0,'');
          $pdf->Cell(30,5,$studentExam['Zulu'],1);
          $pdf->Cell(20,5,'',1);
          $pdf->Cell(80,5,$studentExam['Zulu Comment'],1,1);         

          //ICT
          $pdf->Cell(50,5,'ICT',1,0,'');
          $pdf->Cell(30,5,$studentExam['ICT'],1);
          $pdf->Cell(20,5,'',1);
          $pdf->Cell(80,5,$studentExam['ICT Comment'],1,1);


           
         
         $pdf->Output('F',$studentExam['student_ID']);




     }
     ?>
        



				
		</div> <!--/main content-->
	</main>
			

   <?php
     require_once __DIR__ . '/inc/aside.php';
   ?>
		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>