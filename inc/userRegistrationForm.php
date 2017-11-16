        
        <form class="form-signin" method="post" action="/MuzindaSchoolDatabase3/procedures/DoRegister.php">
            <div class="text-center">
             <h4 class="form-signin-heading">Enter User Details</h4>
            </div>
            <?php echo display_errors(); ?>
            <label for="inputStaffID" class="sr-only">Staff ID</label>
            <input type="" id="inputStaffID" name="StaffID" class="form-control" placeholder="Staff ID" required autofocus>
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <br>
            <label for="inputPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="inputPassword" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>