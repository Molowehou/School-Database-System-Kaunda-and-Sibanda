
 <?php
   require __DIR__ . '/inc/bootstrap.php';
    require_once __DIR__ . '/inc/head.php';
  ?>

  <?php
    require_once __DIR__ . '/inc/header.php';
   ?>

<?php


?>






   

   <div class="container col-12">
    
    <?php
         require_once __DIR__ . '/inc/nav.php';
    ?>

	<main>
		<div class="main-content"> <!--main content-->
         <h5 class="section-title">EXERCISES LIST</h5>



<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th class="col-xs-2"></th>
      <th class="col-xs-1">Date</th>
      <th class="col-xs-2">Topic</th>
      <th class="col-xs-2">Sub-Topic</th>
      <th class="col-xs-2">Title</th>
    </tr>
  </thead>
  
  <tbody>
           
          <?php

          $class = request()->get('class');
          $subject= request()->get('subject');

          foreach (getExercisesBySubject($class, $subject)  as $exercise) {
               include __DIR__ ."/inc/tableMarksForm.php";
          } ?> 



    
  </tbody>
</table>



		</div> <!--/main content-->
	</main>
			

   <?php
     require_once __DIR__ . '/inc/aside.php';
   ?>


  </div><!--/container -->
		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>