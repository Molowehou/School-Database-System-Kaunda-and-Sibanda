
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
	      <h5 class="section-title"> RECORD EXAM MARK</h5>

          <?php echo display_errors(); ?>

<?php 
  $form = request()->get('form');
  $class = request()->get('class');
  $subject = request()->get('subject');
?>

<form class = "form-horizontal" method= "post" action = "procedures/DoAddExamMark.php?class=<?php echo $class; ?> & subject=<?php echo $subject;?>& form=<?php echo $form;?> ">

           <div class="modal-body row">
                
              <div class="col-sm-6"> <!-- Column 1-->

    <div class="form-group">
      <label for="gender" class="col-lg-3 control-label">Term</label>
      <div class="col-sm-3">
        <select class="input-sm" id="gender" id="drop_dwn" name="Term">
          <option  value="1">Term 1</option>
          <option  value="2">Term 2</option>
          <option  value="3">Term 3</option>
        </select>
      </div>
    </div>

                <div class="form-group">
                    <label for="Title" class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="Title" name="Year" value="<?php echo date("Y"); ?>" required="required" readonly="readonly">
                    </div>
                </div>

          </div> <!-- End of column 1-->

       <div class="col-sm-6"> <!-- Column 2-->


       </div> <!-- End of column 2-->


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
                   include __DIR__ ."/inc/tableExam.php";   
              } ?>
  </tbody>
</table>

    

				
		</div> <!--/main content-->
	</main>
			

  <aside>
    <H4 class="section-title"></H4>
              
           
               <button type="submit" class="btn" id="btnSave">SAVE NEW EXAM</button>
            
     


    <a  class="btn" id="btnCancel" href="index.php">Cancel</a>
      
    

  </aside>
  </form>

		
   <?php 
     require_once __DIR__ . '/inc/footer.php';
  ?>