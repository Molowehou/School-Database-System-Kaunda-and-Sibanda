
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


    
    <?php
         require_once __DIR__ . '/inc/nav.php';
    ?>

	<main>
		<div class="main-content"> <!--main content-->
	      <h5 class="section-title">STAFF DATABASE</h5>
        <a class="btn" href="addTeacher.php">ADD NEW TEACHER</a>
        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>
             
          <table class="table">
              <thead>
                <tr>
                  <th  class="col-xs-1" ></th>
                  <th class="col-xs-1">Staff ID</th>
                  <th  class="col-xs-1">Name</th>
                  <th class="col-xs-1">Middle Name</th>
                  <th class="col-xs-1">Surname</th>
                </tr>
              </thead>
  
              <tbody>
                   <?php foreach (getAllTeachers() as $teacher) {
                       include __DIR__ ."/inc/teacher.php";
                   } ?>

              </tbody>
        </table>

				
		</div> <!--/main content-->
	</main>
			

 
		
  <?php 
     require_once __DIR__ . '/inc/footer.php';
  ?>