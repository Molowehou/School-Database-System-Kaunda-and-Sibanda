<?php
   require_once __DIR__ . '/inc/bootstrap.php';
   require_once __DIR__ . '/inc/head.php';
   require_once __DIR__ . '/inc/nav.php';


?>

    <div class="well">
  <hr>

        <div class="modal-body row"> <!-- Start of column which enables the creation of two columns-->


      <div class="col-sm-3"><!--Start of 3rd Column -->

      <div class="form-group">
          <div class="col-sm-12">
              <a class="btn btn-success" href="addStudent.php">ADD NEW STUDENT</a>
          </div>
       </div>

     </div><!-- End of 3rd Column-->
     
      <div class="col-sm-5 col-sm-offset-4"> <!-- first Column-->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
      </div> <!--End of First Column -->

 </div><!-- End of column which enables the creation of two columns-->

<!-- /Student Details -->

 <hr>





        <h4>STUDENT DETAILS</h4>
        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>


        <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th  class="col-xs-1" ></th>
      <th class="col-xs-1">Student ID</th>
      <th  class="col-xs-1">Name</th>
      <th class="col-xs-1">Middle Name</th>
      <th class="col-xs-1">Surname</th>
      <th class="col-xs-1">Form</th>
      <th class="col-xs-1">Class</th>
    </tr>
  </thead>
  
  <tbody>

           <?php foreach (getAllStudents() as $student) {
               include __DIR__ ."/inc/student.php";
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






