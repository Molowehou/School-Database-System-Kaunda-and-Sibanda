
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
         <h5 class="section-title">EXAM MARKS</h5>

<?php 
     $form = request()->get('form');
     $class = request()->get('class');
     $subject = request()->get('subject');
     $ExamID = request()->get('ExamID');
     $student=findExerciseInfoByID($ExamID);

     foreach (getExamByExamID($ExamID) as $exam) {

     }


?>

<form class = "form-horizontal" method= "post" action = "procedures/DoAddTemporaryExercise.php?exercise=<?php echo $ExerciseID ; ?> & form=<?php echo $student['form_ID'];?> & class=<?php echo $student['class_ID'];?>& student=<?php echo $student['student_ID'];?>& subject=<?php echo $student['subject_ID'];?>   ">



          <div class="modal-body row">
                
              <div class="col-sm-6"> <!-- Column 1-->
                  <div class="form-group">
                     <label for="Topic" class="col-sm-3 control-label">Term</label>
                     <div class="col-sm-4">
                         <input type="text" class="form-control" id="Topic" name="Topic" required="required" value="<?php echo $exam['Term'];?>" readonly="readonly">
                     </div>
                </div>

                <div class="form-group">
                    <label for="SubTopic" class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="SubTopic" name="SubTopic" value="<?php echo $exam['Year'];?>" required="required" readonly="readonly">
                    </div>
                </div>


          </div> <!-- End of column 1-->

          <div class="col-sm-6"> <!--column2-->



         </div> <!-- End of column 2-->

     </div> <!-- End of Section-->


           <?php echo display_errors(); ?>
             <table class="table table-striped table-hover ">
                <thead>
                   <tr>
                     <th class="col-xs-1">Student ID</th>
                     <th  class="col-xs-1">Student Name</th>
                     <th class="col-xs-1">Student Surname</th>
                     <th class="col-xs-1">Mark</th>
                     <th class="col-xs-1">Comment</th>
                   </tr>
                </thead>
                <tbody>
          <?php
                $ExamID = request()->get('ExamID');
                foreach (getExamByExamID($ExamID) as $exam) {
                include __DIR__ ."/inc/tableExamMark.php";} ?> 
                
                </tbody>
          </table>


    </div> <!--/main content-->
  </main>
      
<aside>
    <H4 class="section-title"></H4>
              
      <button type="submit" class="btn" id="btnSave"><i class="pe-7s-print"></i>&nbsp;Print</button>

      <a class="btn" id="btnEdit" href="editExam.php?ExamID=<?php echo $exam['ExamID']; ?>"><i class="pe-7s-albums"></i>&nbsp;Edit</a>

      <a  class="btn" id="btnDelete" href="procedures/doDeleteExercise.php?ExerciseID=<?php echo $exercise['ExerciseID']; ?> & class=<?php echo $class;?> & subject=<?php echo $subject;?> & form=<?php echo $form;?>"><i class="pe-7s-trash"></i>&nbsp;Delete</a>

      
      
  </aside>

  </form>

    
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>