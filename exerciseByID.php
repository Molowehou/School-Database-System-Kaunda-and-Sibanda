
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

    <?php
       $form = request()->get('form');
       $class = request()->get('class');
       $subject = request()->get('subject');

    ?>

	<main>
		<div class="main-content"> <!--main content-->
         <h5 class="section-title">EXERCISES LIST</h5>
           <?php echo display_errors(); ?>
           <?php echo display_errors(); ?>


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
          $form = request()->get('form');
          $class = request()->get('class');
          $subject= request()->get('subject');


          foreach (getExerciseByID($form,$class,$subject)  as $exercise) {
               include __DIR__ ."/inc/tableMarksForm.php";
          } ?> 



    
  </tbody>
</table>



		</div> <!--/main content-->
	</main>
			


  <aside>
    <H4 class="section-title"></H4>

    <a  class="btn" id="btnSave" href="addNewExercise.php?class=<?php echo $class;?> & subject=<?php echo $subject;?> & form=<?php echo $form; ?>"><i class="pe-7s-note"></i>&nbsp;ADD NEW EXERCISE</a>

    
      
    

  </aside>
		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>