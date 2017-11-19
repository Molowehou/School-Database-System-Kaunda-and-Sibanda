
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
     <h5 class="section-title">Teacher Subjects Dashboard</h5>


  <div class="modal-body row"> <!-- Start of column which enables the creation of two columns-->

          <div class="col-sm-3 "><!--Start of 1st Column -->
           
           <!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" id="btnSave" data-toggle="modal" data-target="#exampleModal">Assign Teacher to Class
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


          </div><!-- End of 2nd Column-->

                    <div class="col-sm-3 "><!--Start of 3rd Column -->

            <div class="form-group">
               <div class="col-sm-offset-3 col-sm-10">
               <button type="submit" class="btn" id="btnCancel">CANCEL</button>
            </div>
         </div>

          </div><!-- End of 3rd Column-->

 </div><!-- End of column which enables the creation of two columns-->








             <table class="table table-striped table-hover ">
                <thead>
                   <tr>
                     <th class="col-xs-1"></th>
                     <th class="col-xs-1">Staff ID</th>
                     <th  class="col-xs-1">Name</th>
                     <th class="col-xs-1">Surname</th>
                     <th class="col-xs-1">Subject</th>
                     <th class="col-xs-1">Form</th>
                     <th class="col-xs-1">Class</th>
                   </tr>
                </thead>
                <tbody>
          <?php
                foreach (getAllTeachersBySubjects()as $teacherSubject) {
                include __DIR__ ."/inc/tableTeacherSubject.php";} ?> 
                
                </tbody>
          </table>


    </div> <!--/main content-->
  </main>
      


    
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>