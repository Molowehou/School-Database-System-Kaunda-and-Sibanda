
 <?php
   require __DIR__ . '/inc/bootstrap.php';
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
	      <h5 class="section-title">HOME</h5>
        
        <?php echo display_errors(); ?>


        <h4 class= "mb-6 text-center bg-secondary text-white">CLASSES TAUGHT</h4>

                  <div class="list-group">
                   <?php 
                   $user = findUserByAccessToken();
                   $user=$user['employeeStaffID'];

                    foreach (getAllTeacherSubjects($user) as $user):?>

                      <a href="exerciseByID.php?class=<?php echo $user['Class_ID'];?> & subject=<?php echo $user['Subject_ID'];?>" class="list-group-item"><strong><?php echo $user['Form'];?></strong>: <?php echo $user['SubjectName'];?></a>

                    <?php endforeach; ?>
                       
                  </div>
          

        



				
		</div> <!--/main content-->
	</main>
			

   <?php
     require_once __DIR__ . '/inc/aside.php';
   ?>
		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>