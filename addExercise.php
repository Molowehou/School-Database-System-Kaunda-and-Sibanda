

<?php
require_once __DIR__ . '/inc/bootstrap.php';
//requireAuth();
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/nav.php';

?>
<div class="container">
    <div class="well">
        <h2>Add New Teacher</h2> 
          <form class = "form-horizontal" method= "post" action = "procedures/addTeacher.php">
              <?php include __DIR__ ."/inc/teacherForm.php"; ?>
          </form>      
    </div>
</div>
<?php
require_once __DIR__ . '/inc/footer.php';
?>