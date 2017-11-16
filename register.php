<?php
require_once __DIR__ . '/inc/bootstrap.php';
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/nav.php';

?>

<div class="container">
    <div class="well col-sm-6 col-sm-offset-3 text-center">
        <form class="form-signin" method="post" action="/MuzindaSchoolDatabase3/procedures/DoRegister.php">
            <h4 class="form-signin-heading">Registration</h4>
            <?php echo display_errors(); ?>
            <label for="inputStaffID" class="sr-only">Staff ID</label>
            <input type="text" id="inputStaffID" name="StaffID" class="form-control" placeholder="Staff ID" required autofocus>
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <br>
            <label for="inputPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="inputPassword" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
    </div>
</div>


