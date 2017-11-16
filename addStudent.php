
 <?php
   require __DIR__ . '/inc/bootstrap.php';
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
        <h5 class="section-title">STUDENT REGISTRATION</h5>

        <form class = "form-horizontal" method= "post" action = "procedures/addStudent.php">
            <?php include __DIR__ ."/inc/StudentForm.php"; ?>
        </form>


				
		</div> <!--/main content-->
	</main>
			



  
		
  <?php 
     require_once __DIR__ . '/inc/footer.php';
  ?>

