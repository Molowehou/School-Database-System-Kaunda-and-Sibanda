
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
     $student=findExamInfoByID($ExamID);

     foreach (getExamByExamID($ExamID) as $exam) {

     }


?>

<form class = "form-horizontal" method= "post" action = "procedures/DoAddTemporaryExam.php?exam=<?php echo $ExamID ; ?> & form=<?php echo $student['form_ID'];?> & class=<?php echo $student['class_ID'];?>& student=<?php echo $student['student_ID'];?>& subject=<?php echo $student['subject_ID'];?>">



          <div class="modal-body row"> 
                
              <div class="col-sm-6"> <!-- Column 1-->
                 <div class="form-group">
                   <label for="gender" class="col-lg-3 control-label">Term</label>
                   <div class="col-sm-3">
                     <select class="input-sm" id="gender" id="drop_dwn" name="Term">
                       <option <?php if($exam['Term']==1){echo "selected";};?>  value="1">Term 1 </option>
                       <option <?php if($exam['Term']==2){echo "selected";};?> value="2">Term 2</option>
                       <option <?php if($exam['Term']==3){echo "selected";};?> value="3">Term 3</option>
                     </select>
                   </div>
                 </div>

                <div class="form-group">
                    <label for="SubTopic" class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="SubTopic" name="Year" value="<?php echo $exam['Year'];?>" required="required">
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
                $i=0;
                foreach (getExamByExamID($ExamID) as $exam) {

                  ++$i; 
                include __DIR__ ."/inc/tableEditExamMark.php";} ?> 
                
                </tbody>
          </table>


    </div> <!--/main content-->
  </main>
      
<aside>
    <H4 class="section-title"></H4>
              
        <button type="submit" class="btn" id="btnSave">Save Changes</button>
      <a  class="btn" id="btnCancel" href="index.php">Cancel</a>
      
      
  </aside>

  </form>

    
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>