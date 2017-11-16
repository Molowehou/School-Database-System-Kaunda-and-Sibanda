
 <?php
   require __DIR__ . '/inc/bootstrap.php';
   requireAuth();
    require_once __DIR__ . '/inc/head.php';
  ?>
    <?php
      if(!isAdmin()){
       $session->getFlashBag()->add('error', 'Not Authorized');
       redirect('index.php');
    }?>

  <?php
    require_once __DIR__ . '/inc/header.php';
   ?>

   <div class="container col-12">
    
    <?php
         require_once __DIR__ . '/inc/nav.php';
    ?>

	<main>
		<div class="main-content"> <!--main content-->
	      <h5 class="section-title">EXAMS DATABASE</h5>
             


				
		</div> <!--/main content-->
	</main>
			


  </div><!--/container -->
		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>