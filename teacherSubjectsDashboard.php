
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
       <?php echo display_errors(); ?>
        <?php echo display_success(); ?> 



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

  <aside>
    <H4 class="section-title"></H4>
              
                <!-- Button to trigger modal -->
<button type="button" class="btn" id="btnSave" data-toggle="modal" data-target="#teacherClassModal">Assign Teacher to Class
</button>

<!-- Modal -->
<div class="modal fade" id="teacherClassModal" tabindex="-1" role="dialog" aria-labelledby="teacherClassModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
       
          <div class="modal-body">
            <!-- <h4>Assign Teacher to Subject</h4> -->
          <form class = "form-horizontal" method= "post" action = "procedures/addTeacherSubject.php">
              
              <?php include __DIR__ ."/inc/teacherSubjectForm.php"; ?>

          </form>

      </div>   <!--/Modal-body --> 
    </div> <!--/Modal-content --> 

 </div> <!--/Modal-dialog -->
</div><!--/Modal -->





      <a  class="btn" id="btnEdit" href="index.php">Main Menu</a>
      
  </aside>
      


    
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>