
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
	      <h5 class="section-title">ADD NEW EXERCISE</h5>

          <?php echo display_errors(); ?>

<?php 
  $form = request()->get('form');
  $class = request()->get('class');
  $subject = request()->get('subject');
?>

<form class = "form-horizontal" method= "post" action = "procedures/DoAddExercise.php?class=<?php echo $class; ?> & subject=<?php echo $subject;?>& form=<?php echo $form;?> ">

           <div class="modal-body row">
                
              <div class="col-sm-6"> <!-- Column 1-->
                  <div class="form-group">
                     <label for="Topic" class="col-sm-3 control-label">Topic</label>
                     <div class="col-sm-9">
                         <input type="text" class="form-control" id="Topic" name="Topic" required="required" value="">
                     </div>
                </div>

                <div class="form-group">
                    <label for="SubTopic" class="col-sm-3 control-label">Sub-Topic</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="SubTopic" name="SubTopic" value="" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Title" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Title" name="Title" value="" required="required">
                    </div>
                </div>

          </div> <!-- End of column 1-->

          <div class="col-sm-6"> <!--column2-->


         <div class="form-group">
             <label for="HighestPossibleMark" class="col-sm-8 control-label">Highest Possible Mark</label>
             <div class="col-sm-5">
                 <input type="text" class="form-control" id="HighestPossibleMark" name="HighestPossibleMark" value=""  required="required">
             </div>
         </div>
         </div> <!-- End of column 2-->


          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
               <button type="submit" class="btn" id="btnSave">ADD EXERCISE</button>
            </div>
         </div>


     </div> <!-- End of Section-->






     <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th class="col-xs-1">Student ID</th>
      <th  class="col-xs-2">Student Name</th>
      <th class="col-xs-2">Student Surname</th>
      <th class="col-xs-1">Mark</th>
      <th class="col-xs-3">Comment</th>
    </tr>
  </thead>
  
  <tbody>
            <?php
       $form = request()->get('form');
       $class = request()->get('class');
       $subject = request()->get('subject'); 

               $i=0;
               foreach (getClassByID($form,$class) as $student) {

                 $numberOfStudents = count($student);
                  ++$i; 
                   include __DIR__ ."/inc/tableStudents.php";   
              } ?>
  </tbody>
</table>

      </form>

				
		</div> <!--/main content-->
	</main>
			




		
   <?php 
     require_once __DIR__ . '/inc/footer.php';
  ?>