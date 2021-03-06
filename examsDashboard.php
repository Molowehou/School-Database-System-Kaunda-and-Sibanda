
 <?php
   require __DIR__ . '/inc/bootstrap.php';
   requireAuth();
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
        <h5 class="section-title"><i class="pe-7s-home"></i>Exams Dashboard</h5>

        <?php echo display_success(); ?>
        <?php echo display_errors(); ?>

          <!-- <h5 class="section-title">Classes Taught</h5> -->
        

                  <div class="list-group">
                   <?php 
                   $user = findUserByAccessToken();
                   $user=$user['employeeStaffID'];

                    foreach (getAllTeacherSubjects($user) as $user):?>

                      <a href="examsList.php?class=<?php echo $user['Class_ID'];?> & subject=<?php echo $user['Subject_ID'];?> & form=<?php echo $user['Form_ID'];?>" class="list-group-item"><i class="pe-7s-albums"></i>&nbsp;<strong><?php echo $user['Form'];echo $user['Class'] ?></strong>: <?php echo $user['SubjectName'];?></a>

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