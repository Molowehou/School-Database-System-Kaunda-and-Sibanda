<?php
require_once __DIR__ . '/inc/bootstrap.php';
//requireAuth();
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/nav.php';

?>

<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Assign Teacher to Class
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <h4>Assign Teacher to Subject</h4> 
          <div class="modal-body">
          <form class = "form-horizontal" method= "post" action = "procedures/addTeacherSubject.php">
              
              <?php include __DIR__ ."/inc/teacherSubjectForm.php"; ?>

          </form>

      </div>   <!--/Modal-body --> 
    </div> <!--/Modal-content --> 

 </div> <!--/Modal-dialog -->
</div><!--/Modal -->

  <?php echo display_errors(); ?>
  
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th></th>
      <th>Staff ID</th>
      <th>Name</th>
      <th>Subject</th>
      <th>Class</th>
    </tr>
  </thead>
  
  <tbody>

           <?php foreach (getAllTeacherSubjects() as $teacher_subject) {
               include __DIR__ ."/inc/tableSubjectTeacher.php";
          } ?>

    
  </tbody>
</table> 