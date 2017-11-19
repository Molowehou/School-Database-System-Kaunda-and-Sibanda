
 <?php
   require __DIR__ . '/inc/bootstrap.php';
   //requireAuth();
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

    <div class="well col-sm-6 col-sm-offset-3">
        <form class="form-signin" method="post" action="/MuzindaSchoolDatabase3/procedures/changePassword.php">
            <h4 class="form-signin-heading">My Account</h4>
            <h5 class="form-signin-heading">Change Password</h5>
            
            <!-- <?php //echo display_success(); ?> -->
            <label for="inputCurrentPassword" class="sr-only">Current Password</label>
            <input type="password" id="inputCurrentPassword" name="current_password" class="form-control" placeholder="Current Password" required autofocus>
            <br>
            <label for="inputNewPassword" class="sr-only">New Password</label>
            <input type="password" id="inputNewPassword" name="new_password" class="form-control" placeholder="New Password" required>
            <br>
            <label for="confirmPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="confirmPassword " name="confirm_password" class="form-control" placeholder="Confirm New Password" required>
            <br>
            <button class="btn" id="btnChange type="submit">Change Password</button>
        </form>
    </div>


             

                
        </div> <!--/main content-->
    </main>
            



        
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>


