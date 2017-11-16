 <?php
 require __DIR__ . '/inc/bootstrap.php';
 require_once __DIR__ . '/inc/head.php';
 require_once __DIR__ . '/inc/nav.php';

if(request()->cookies->has('access_token')){

  echo "you are logged in";
}

?>

  <div class="container">
    <div class="well text-center">

        <h2>Welcome to the Administration Section</h2>
        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>
        <h3></h3>

       <div class="row"> <!--Row-->

                <div class="col-md-2 mt-.5 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/marks.jpg" alt="Card image cap">
                      <div class="card-body">
                         <p class="card-text">Marks Database</p>               
                </div>
                </a> 
               </div> <!-- /Card -->

                </div>
                 <div class="col-md-2 mt-.5 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/library.jpg" alt="Card image cap">
                      <div class="card-body">
                         <p class="card-text">Library Section</p>
                      </div>
               </div> <!-- /Card -->
                 </a>
                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/textbooks.jpg" alt="Card image cap">
                      <div class="card-body">
                         <p class="card-text">TextBooks Section</p>
                      </div>
               </div> <!-- /Card -->
               </a>
                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/students.jpg" alt="Card image cap">
                      <div class="card-body">
                          <p class="card-text">Student Details Section</p>
                      </div>
               </div> <!-- /Card -->
               </a>
                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top" src="img/reports.jpg" alt="Card image cap">
                      <div class="card-body">
                         <p class="card-text">Teacher Details Section </p>
                      </div>
               </div> <!-- /Card -->
               </a>
                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/clocks.jpg" alt="Card image cap">
                      <div class="card-body">
                         <p class="card-text">Clock in And Out</p>
                      </div>
               </div> <!-- /Card -->
              </a>
             </div> <!--Row-->
             

                <div class="col-md-2 mt-.5 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/marks.jpg" alt="Card image cap">
                      <div class="card-body">
                         <p class="card-text">Marks Database</p>               
                </div>
                </a> 
               </div> <!-- /Card -->

                </div>
                 <div class="col-md-2 mt-.5 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/library.jpg" alt="Card image cap">
                      <div class="card-body">
                         <p class="card-text">Library Section</p>
                      </div>
               </div> <!-- /Card -->
                 </a>
                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/textbooks.jpg" alt="Card image cap">
                      <div class="card-body">
                         <p class="card-text">TextBooks Section</p>
                      </div>
               </div> <!-- /Card -->
               </a>
                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/students.jpg" alt="Card image cap">
                      <div class="card-body">
                          <p class="card-text">Student Details Section</p>
                      </div>
               </div> <!-- /Card -->
               </a>
                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top" src="img/reports.jpg" alt="Card image cap">
                      <div class="card-body">
                         <p class="card-text">Reports</p>
                      </div>
               </div> <!-- /Card -->
               </a>
                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><a href="#"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/clocks.jpg" alt="Card image cap">
                      <div class="card-body">
                         <p class="card-text">Clock in And Out</p>
                      </div>
               </div> <!-- /Card -->
              </a>
             </div> <!--Row-->










    </div>
  </div>

<?php
require_once __DIR__ . '/inc/footer.php';
?>