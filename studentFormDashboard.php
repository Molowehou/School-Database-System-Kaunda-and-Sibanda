
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
	      <h5 class="section-title">STUDENT DATABASE</h5>
              
        <div class="list-group">
          <?php 
             $user = findUserByAccessToken();
            
              foreach (getDistinctClass() as $class):?>

                  <a href="StudentClassDashboard.php?form=<?php echo $class['FormID'];?>&class=<?php echo $class['ClassID'];?>" class="list-group-item"><strong><?php echo $class['Form'];?><?php echo $class['Class'];?></strong></a>

                    <?php endforeach; ?>
                       
                  </div>
		</div> <!--/main content-->
	</main>
 
  <aside>
    <H4 class="section-title"></H4>

    <a class="btn" id="btnSave" href="addStudent.php"><i class="pe-7s-note"></i>&nbsp;ADD NEW STUDENT</a>


    <a class="btn" id="btnEdit" href="Reports/studentList.php" target="_blank">Print</a>

  </aside>



			

   <?php 
     require_once __DIR__ . '/inc/footer.php';
  ?>