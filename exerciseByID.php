
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


         <!-- ADD NEW TEACHER -->


    <div class="modal-body row"> <!-- Start of column which enables the creation of two columns-->

          <div class="col-sm-3 "><!--Start of 3rd Column -->

            <div class="form-group">
               <div class="col-sm-offset-3 col-sm-10">

 

               <a  class="btn" id="btnSave" href="addNewExercise.php?class=<?php echo $class;?> & subject=<?php echo $subject;?> & form=<?php echo $form; ?>">ADD NEW EXERCISE</a>
            </div>
         </div>

          </div><!-- End of 3rd Column-->

                    <div class="col-sm-3 "><!--Start of 3rd Column -->

            <div class="form-group">
               <div class="col-sm-offset-3 col-sm-10">
               <button type="submit" class="btn" id="btnCancel">CANCEL</button>
            </div>
         </div>

          </div><!-- End of 3rd Column-->

 </div><!-- End of column which enables the creation of two columns-->

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
			


 
		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>