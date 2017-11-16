
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
         <h5 class="section-title">EXERCISE MARKS</h5>
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
                $ExerciseID = request()->get('ExerciseID');
                foreach (getExerciseByExerciseID($ExerciseID) as $exercise) {
                include __DIR__ ."/inc/tableExerciseMark.php";} ?> 
                
                </tbody>
          </table>


    </div> <!--/main content-->
  </main>
      


    
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>