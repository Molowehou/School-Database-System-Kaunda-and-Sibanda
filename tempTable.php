
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

    $DeleteTempData=deleteTempExam();

     foreach (getExamResults()as $studentExam) {

      $newData =updateTempData($studentExam['student_ID'],$studentExam['studentFirstName'],$studentExam['studentLastName'],$studentExam['Accounts'],$studentExam['Commerce'],$studentExam['Business Studies'],$studentExam['Mathematics'],$studentExam['Geography'],$studentExam['Ndebele'],$studentExam['English'],$studentExam['Biology'],$studentExam['Intergrated Science'],$studentExam['Physics'],$studentExam['Chemistry'],$studentExam['Zulu'],$studentExam['ICT']);
     }
    //Update Accounts Comment
     foreach (getCommentByID(1)as $AccountsComment) {
     

     
      $newData =UpdateAccountsComment($AccountsComment['Comment'],$AccountsComment['student_ID']);
     }

   //Update Commerce Comment
     foreach (getCommentByID(2)as $CommerceComment) {
      $newData =UpdateCommerceComment($CommerceComment['Comment'],$CommerceComment['student_ID']);
     }

  //Update Business Studies Comment
     foreach (getCommentByID(3)as $BusinessStudiesComment) {
      $newData =UpdateBusinessStudiesComment($BusinessStudiesComment['Comment'],$BusinessStudiesComment['student_ID']);
     }

  //Update Mathematics Comment
     foreach (getCommentByID(4)as $MathematicsComment) {
      $newData =UpdateMathematicsComment($MathematicsComment['Comment'],$MathematicsComment['student_ID']);
     }

  //Update Geography Comment
     foreach (getCommentByID(5)as $GeographyComment) {
      $newData =UpdateGeographyComment($GeographyComment['Comment'],$GeographyComment['student_ID']);
     }

  //Update Ndebele Comment
     foreach (getCommentByID(6)as $NdebeleComment) {
      $newData =UpdateNdebeleComment($NdebeleComment['Comment'],$NdebeleComment['student_ID']);
     }
  //Update English Comment
     foreach (getCommentByID(7)as $EnglishComment) {
      $newData =UpdateEnglishComment($EnglishComment['Comment'],$EnglishComment['student_ID']);
     }

  //Update Biology Comment
     foreach (getCommentByID(8)as $BiologyComment) {
      $newData =UpdateBiologyComment($BiologyComment['Comment'],$BiologyComment['student_ID']);
     }

  //Update Intergrated Science Comment
     foreach (getCommentByID(9)as $IntergratedScienceComment) {
      $newData =UpdateIntergratedScienceComment($IntergratedScienceComment['Comment'],$IntergratedScienceComment['student_ID']);
     }

  //Update Physics Comment
     foreach (getCommentByID(10)as $PhysicsComment) {
      $newData =UpdatePhysicsComment($PhysicsComment['Comment'],$PhysicsComment['student_ID']);
     }

   //Update Chemistry Comment
     foreach (getCommentByID(11)as $ChemistryComment) {
      $newData =UpdateChemistryComment($ChemistryComment['Comment'],$ChemistryComment['student_ID']);
     }

    //Update Zulu Comment
     foreach (getCommentByID(12)as $ZuluComment) {
      $newData =UpdateZuluComment($ZuluComment['Comment'],$ZuluComment['student_ID']);
     }

       //Update ICT Comment
     foreach (getCommentByID(13)as $ICTComment) {
      $newData =UpdateICTComment($ICTComment['Comment'],$ICTComment['student_ID']);
     }


    foreach (getReportDetails()as $studentExam) {


          // require_once __DIR__ . '/Reports/report.php';
          $pdf = new FPDF();
          $pdf->AddPage();


//School Logo
    $pdf->SetFillColor(300);
    $pdf->RoundedRect(8,7, 195, 285,5, '1234', 'DF');

   $pdf->Image('Reports/logo.png',10,10,30);
  

      $pdf->SetFont('Helvetica','B',30);
      $pdf->SetXY(30, 10);
      //Report Name
      $pdf->Cell(0,8,'HIGHER LEARNING CENTRE',0,1,'C');

      //Dummmy Cell to give spacing
       

      $pdf->SetFont('Helvetica','B',15);
      $pdf->Cell(0,10,'END OF TERM PROGRESS REPORT',0,0,'C');


         $pdf->SetFont('Helvetica','',12);
         $pdf->SetDrawColor(50,50,100);

         //Dummmy Cell to give spacing
        $pdf->Ln(25);
        $pdf->SetFont('Helvetica','B',12);
        $pdf->SetFillColor(180,180,255);
        $pdf->SetDrawColor(50,50,100);
        
        //Draw Table
        $pdf->Cell(30,8,'Name',1,0,'');
        $pdf->Cell(65,8,$studentExam['studentFirstName'],1,0,'');
        $pdf->Cell(5,8,'',0,0,'');
        $pdf->Cell(25,8,'Surname',1,0,'');
        $pdf->Cell(66,8,$studentExam['studentLastName'],1,1,'');

       //Dummmy Cell to give spacing
        $pdf->Ln(2);
  
        $pdf->Cell(30,8,'Year',1,0,'');
        $pdf->Cell(30,8,'2018',1,0,'');
        $pdf->Cell(5,8,'',0,0,'');
        $pdf->Cell(36,8,'Term',1,0,'');
        $pdf->Cell(30,8,'1',1,0,'');
        $pdf->Cell(5,8,'',0,0,'');
        $pdf->Cell(30,8,'Form',1,0,'');
        $pdf->Cell(25,8,'',1,1,'');


       //Dummmy Cell to give spacing
         $pdf->Ln(2);
  
         $pdf->Cell(30,8,'Attendance',1,0,'');
         $pdf->Cell(30,8,'',1,0,'');
         $pdf->Cell(5,8,'',0,0,'');
         $pdf->Cell(36,8,'Average Mark(%)',1,0,'');
         $pdf->Cell(30,8,'',1,0,'');
         $pdf->Cell(5,8,'',0,0,'');
         $pdf->Cell(30,8,'Total Points',1,0,'');
         $pdf->Cell(25,8,'',1,1,'');

    //Dummmy Cell to give spacing
        $pdf->Ln(8);

     //Draw Table
        $pdf->Cell(50,8,'Subject',1,0,'',true);
        $pdf->Cell(30,8,'Course Mark',1,0,'',true);
        $pdf->Cell(20,8,'Grade',1,0,'',true);
        $pdf->Cell(91,8,'Teachers Remarks',1,1,'',true);





          $pdf->SetFont('Helvetica','B',12);
          //Accounts
          $pdf->Cell(50,8,'Accounts',1,0,'');
          $pdf->Cell(30,8,$studentExam['Accounts'],1);
          $pdf->Cell(20,8,'',1);
          $pdf->Cell(91,8,$studentExam['Accounts Comment'],1,1);
          
          //Commerce
          $pdf->Cell(50,8,'Commerce',1,0,'');
          $pdf->Cell(30,8,$studentExam['Commerce'],1);
          $pdf->Cell(20,8,'',1);
          $pdf->Cell(91,8,$studentExam['Commerce Comment'],1,1);
          
          //Business Studies
          $pdf->Cell(50,8,'Business Studies',1,0,'');
          $pdf->Cell(30,8,$studentExam['Business Studies'],1);
          $pdf->Cell(20,8,'',1);
          $pdf->Cell(91,8,$studentExam['Business Studies Comment'],1,1);

          //Mathematics

          $pdf->Cell(50,8,'Mathematics',1,0,'');
          $pdf->Cell(30,8,$studentExam['Mathematics'],1);
          $pdf->Cell(20,8,'',1);
          $pdf->Cell(91,8,$studentExam['Mathematics Comment'],1,1);           
          //Geography
          $pdf->Cell(50,8,'Geography',1,0,'');
          $pdf->Cell(30,8,$studentExam['Geography'],1);
          $pdf->Cell(20,8,'',1);
          $pdf->Cell(91,8,$studentExam['Geography Comment'],1,1);                    
          //Ndebele
          $pdf->Cell(50,8,'Ndebele',1,0,'');
          $pdf->Cell(30,8,$studentExam['Ndebele'],1);
          $pdf->Cell(20,8,'',1);
          $pdf->Cell(91,8,$studentExam['Ndebele Comment'],1,1);
          
          //English
          $pdf->Cell(50,8,'English',1,0,'');
          $pdf->Cell(30,8,$studentExam['English'],1);
          $pdf->Cell(20,8,'',1);
          $pdf->Cell(91,8,$studentExam['English Comment'],1,1);          
          //Biology
          $pdf->Cell(50,8,'Biology',1,0,'');
          $pdf->Cell(30,8,$studentExam['Biology'],1);
          $pdf->Cell(20,8,'',1);
          $pdf->Cell(91,8,$studentExam['Biology Comment'],1,1);

          //Intergrated Science
         $pdf->Cell(50,8,'Intergrated Science',1,0,'');
         $pdf->Cell(30,8,$studentExam['Intergrated Science'],1);
         $pdf->Cell(20,8,'',1);
         $pdf->Cell(91,8,$studentExam['Intergrated Science Comment'],1,1);


        //Physics
        $pdf->Cell(50,8,'Physics',1,0,'');
        $pdf->Cell(30,8,$studentExam['Physics'],1);
        $pdf->Cell(20,8,'',1);
        $pdf->Cell(91,8,$studentExam['Physics Comment'],1,1); 



          //Chemistry
          $pdf->Cell(50,8,'Chemistry',1,0,'');
          $pdf->Cell(30,8,$studentExam['Chemistry'],1);
          $pdf->Cell(20,8,'',1);
          $pdf->Cell(91,8,$studentExam['Chemistry Comment'],1,1);

          //Zulu
          $pdf->Cell(50,8,'Zulu',1,0,'');
          $pdf->Cell(30,8,$studentExam['Zulu'],1);
          $pdf->Cell(20,8,'',1);
          $pdf->Cell(91,8,$studentExam['Zulu Comment'],1,1);         

          //ICT
          $pdf->Cell(50,8,'ICT',1,0,'');
          $pdf->Cell(30,8,$studentExam['ICT'],1);
          $pdf->Cell(20,8,'',1);
          $pdf->Cell(91,8,$studentExam['ICT Comment'],1,1);

//Class Teachers Comments
     $pdf->SetFont('Helvetica','B',12);
      
      $pdf->SetXY(10,195);
      $pdf->Cell(55,7,'Class Teacher Comment',1);
      $pdf->Cell(136,7,'C',1,1);

      $pdf->SetXY(96,203);
      $pdf->Cell(55,7,'Class Teacher Signature',1);
      $pdf->Cell(50,7,'C',1,1);



      $pdf->SetXY(10,211);
      $pdf->Cell(55,7,'Head Comment',1);
      $pdf->Cell(136,7,'C',1,1);

      $pdf->SetXY(96,219);
      $pdf->Cell(55,7,'Head Signature',1);
      $pdf->Cell(50,7,'C',1,1);


      $pdf->SetXY(75,229);
      $pdf->Cell(70,40,'STAMP',1);
          

           
         
      $pdf->Output('F',$studentExam['student_ID']);




     }


     echo "The Reports have been successfully printed";


     ?>


        



				
		</div> <!--/main content-->
	</main>
			

   <?php
     require_once __DIR__ . '/inc/aside.php';
   ?>
		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>