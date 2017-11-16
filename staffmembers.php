
<?php
 require __DIR__ . '/inc/bootstrap.php';
 require_once __DIR__ . '/inc/head.php';
 require_once __DIR__ . '/inc/nav.php';
if(request()->cookies->has('access_token')){
  echo "you are logged in";
}

?>

  <h1 id ="staffMembers" class="display-4 text-center my-5 text-muted">Staff Members</h1>
             
             <div class="row"> <!--Row-->

                <div class="col-md-2 mt-.5 mb-1">
                <div class="card"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/geo.png" alt="Card image cap">
                      <div class="card-body">
                         <h4 class="card-title">Thabani Masawi</h4>
                         <p class="card-text">Geo is a JavaScript developer working on large-scale applications. He's also a teacher who strives to support students in removing all barriers to learning code.</p>
                      </div>
               </div> <!-- /Card -->

                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/ecma.png" alt="Card image cap">
                      <div class="card-body">
                         <h4 class="card-title">Ecma Scriptnstuff</h4>
                         <p class="card-text">Ecma found her passion for computers and programming over 15 years ago. She is excited to introduce people to the wonderful world of JavaScript.</p>
                      </div>
               </div> <!-- /Card -->
                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/jay.png" alt="Card image cap">
                      <div class="card-body">
                         <h4 class="card-title">Jay Query</h4>
                          <p class="card-text">Jay is a developer, author of CSS: The Missing Manual, JavaScript &amp; jQuery: The Missing Manual, and web development teacher.</p>
                      </div>
               </div> <!-- /Card -->
                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><!-- Card -->
                    <img class="card-img-top" src="img/json.png" alt="Card image cap">
                      <div class="card-body">
                         <h4 class="card-title">Json Babel</h4>
                         <p class="card-text">All of his professional life, Json has worked with computers online; he is a polyglot programmer and likes using the right tools for the job.</p>
                      </div>
               </div> <!-- /Card -->
                </div>

                <div class="col-md-2 mt-1 mb-1">
                <div class="card"><!-- Card -->
                    <img class="card-img-top img-fluid" src="img/nodestradamus.png" alt="Card image cap">
                      <div class="card-body">
                         <h4 class="card-title">Thabani Masawi</h4>
                         <p class="card-text">All of his life Thabani has been a teacher an a leader. He enjoys rare steak and a good bottle of whisky after a long week</p>
                      </div>
               </div> <!-- /Card -->

             </div> <!--Row-->

          </div>   <!-- Team Members -->


  <?php
    require_once __DIR__ . '/inc/footer.php';
  ?>