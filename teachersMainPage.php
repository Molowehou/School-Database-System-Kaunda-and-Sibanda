<?php
   require_once __DIR__ . '/inc/bootstrap.php';
   require_once __DIR__ . '/inc/head.php';
   require_once __DIR__ . '/inc/nav.php';


?>
<div class="container">
     
    <div class="well">
      <div class="text-center">
        <h4>STAFF DATABASE</h4>
     </div>


        <div class="modal-body row"> <!-- Start of column which enables the creation of two columns-->

          <div class="col-sm-3"><!--Start of 3rd Column -->

            <div class="form-group">
                <div class="col-sm-12">
                    <a class="btn btn-success" href="addTeacher.php">ADD NEW TEACHER</a>
                </div>
             </div>

           </div><!-- End of 3rd Column-->


          <div class="col-sm-3"><!--Start of 3rd Column -->

            <div class="form-group">
                <div class="col-sm-12">
                    <a class="btn btn-info" href="index.php">Back to Main Page</a>
                </div>
             </div>

           </div><!-- End of 3rd Column-->

      <div class="col-sm-5 col-sm-offset-1"> <!-- first Column-->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Enter Staff ID">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
      </div> <!--End of First Column -->           



 </div><!-- End of column which enables the creation of two columns-->

<!-- /Student Details -->

        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>


        <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th  class="col-xs-1" ></th>
      <th class="col-xs-1">Staff ID</th>
      <th  class="col-xs-1">Name</th>
      <th class="col-xs-1">Middle Name</th>
      <th class="col-xs-1">Surname</th>
    </tr>
  </thead>
  
  <tbody>

           <?php foreach (getAllTeachers() as $teacher) {
               include __DIR__ ."/inc/teacher.php";
          } ?>
    
  </tbody>

        
















          <?php foreach (getAllStudents() as $student) {
          	//include __DIR__.'/inc/student.php'; 
          }   ?>
    </div>
</div>

<?php
   require_once __DIR__ . '/inc/footer.php';





?>






