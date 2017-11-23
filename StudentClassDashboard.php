
 <?php
   require __DIR__ . '/inc/bootstrap.php';
   requireAuth();
    require_once __DIR__ . '/inc/head.php';
  ?>
    <?php
      if(!isAdmin()){
       $session->getFlashBag()->add('error', 'Not Authorized');
       redirect('index.php');
    }?>

  <?php
    require_once __DIR__ . '/inc/header.php';
   ?>

    
    <?php
         require_once __DIR__ . '/inc/nav.php';
    ?>
    <?php
         $form = request()->get('form');
         $class = request()->get('class');
    ?>


  <main>
    <div class="main-content"> <!--main content-->
        <h5 class="section-title">STUDENT LIST</h5>
        <!-- <a class="btn" href="addStudent.php">ADD NEW STUDENT</a> -->
        <a class="btn" href="Reports/studentList.php" target="_blank">Print</a>
        <?php echo display_errors(); ?>
             
        <table class="table table-striped table-hover ">
             <thead>
               <tr>
                 <th  class="col-xs-2" ></th>
                 <th class="col-xs-1">Student ID</th>
                 <th  class="col-xs-1">Name</th>
                 <th class="col-xs-1">Middle Name</th>
                 <th class="col-xs-1">Surname</th>
                 <th class="col-xs-1">Form</th>
                 <th class="col-xs-1">Class</th>
               </tr>
              </thead>
  
              <tbody>
              
                <?php 
      


            foreach (getClassByID($form,$class) as $student) {
                   include __DIR__ ."/inc/student.php";} 
                 ?>
                
              </tbody>
         </table>

        
    </div> <!--/main content-->
  </main>
      

   <?php 
     require_once __DIR__ . '/inc/footer.php';
  ?>