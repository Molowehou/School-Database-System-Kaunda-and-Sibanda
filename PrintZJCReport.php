
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
	      foreach (getExerciseByExerciseID(20) as $student) {
   
         require_once __DIR__ . '/inc/reportZJC.php';
         
         $pdf->Output('F',$student['student_ID']);

         }

         ?>



             


				
		</div> <!--/main content-->
	</main>
			

		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>