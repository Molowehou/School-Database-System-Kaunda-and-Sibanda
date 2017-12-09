
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
        <h5 class="section-title">STUDENT REGISTRATION FORM</h5>

          <?php echo display_errors(); ?>

        <form class = "form-horizontal" method= "post" action = "procedures/addStudent.php">

            <?php include __DIR__ ."/inc/StudentForm2.php"; ?>
        


				
		</div> <!--/main content-->
	</main>
		
   <aside>
     <H4 class="section-title"></H4>

      <button type="submit" class="btn" id="btnSave"><?php if(isset($buttonText)){echo $buttonText;} else{
              echo "SAVE NEW STUDENT";}?></button>

      <a class="btn" id="btnDelete" href="index.php">Cancel</a>
           
   

  </aside>	




</form>
		
  <?php 
     require_once __DIR__ . '/inc/footer.php';
  ?>

