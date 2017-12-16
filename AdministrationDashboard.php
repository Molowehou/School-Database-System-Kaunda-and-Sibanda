
 <?php
   require __DIR__ . '/inc/bootstrap.php';
   requireAuth();
    require_once __DIR__ . '/inc/head.php';
  ?>

<?php
      if(!isAdmin()){
       $session->getFlashBag()->add('error', 'Not Authorized');
       redirect('index.php');
    }
?>
  <?php
    require_once __DIR__ . '/inc/header.php';
   ?>

   
    
    <?php
         require_once __DIR__ . '/inc/nav.php';
    ?>

	<main>
		<div class="main-content"> <!--main content-->
	      <h5 class="section-title">ADMINISTRATION DASHBOARD</h5>
          <?php echo display_errors(); ?>

      <nav class="main-nav admin">
        
        <ul id="menu">  



          <li><a href="studentFormDashboard.php"><i class="pe-7s-users"></i>&nbsp;STUDENT DATABASE</a></li>


          <li><a href="staffDashboard.php"><i class="pe-7s-id"></i>&nbsp;STAFF DATABASE</a></li>


          <li><a href="marksDashboard.php"><i class="pe-7s-study"></i>&nbsp;MARKS DATABASE</a></li>


          <li><a href="textbooksDashboard.php"><i class="pe-7s-notebook"></i>&nbsp;TEXTBOOKS</a></li>


          <li><a href="inventoryDashboard.php"><i class="pe-7s-note2"></i>&nbsp;INVENTORY</a></li>


          <li><a href="examsDashboard.php"><i class="pe-7s-safe"></i>&nbsp;EXAMS DATABASE</a></li>


          <li><a href="adminDashboard.php"><i class="pe-7s-users"></i>&nbsp;USER REGISTRATION</a></li>


          <li><a href="teacherSubjectsDashboard.php"><i class="pe-7s-tools"></i>&nbsp;TEACHER-SUBJECTS SECTION</a></li>


                    <li><a href="noticeboardDashboard.php"><i class="pe-7s-tools"></i>&nbsp;NOTICEBOARD</a></li>
        </ul>
      </nav>

                  

             
             
				
		</div> <!--/main content-->
	</main>
			

  <aside>
    <H4 class="section-title"></H4>

      

    

  </aside>



		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>