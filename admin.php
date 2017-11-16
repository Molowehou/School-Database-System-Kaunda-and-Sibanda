<?php
require_once __DIR__ . '/inc/bootstrap.php';
requireAdmin();
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/nav.php';

?>
<div class="container">
    <div class="well">
      <div class="text-center">
      <h4>ADMINISTRATION SECTION</h4> 
      </div>
<hr>
          <div class="modal-body row"> <!-- Start of column which enables the creation of two columns-->



         <div class="col-sm-3"><!--Start of 3rd Column -->
        <!-- Button to trigger modal -->
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Register New User
                       </button>

        <!-- Modal -->
                       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                           <div class="modal-content">
                             
                                 <div class="modal-body">
                                 <form class = "form-horizontal" method= "post" action = "procedures/DoRegister.php">
              
                                     <?php include __DIR__ ."/inc/userRegistrationForm.php"; ?>

                                 </form>

                             </div>   <!--/Modal-body --> 
                           </div> <!--/Modal-content --> 

                        </div> <!--/Modal-dialog -->
                       </div><!--/Modal -->


                   </div> <!--End of Modal div -->

          <div class="col-sm-3"><!--Start of 3rd Column -->

            <div class="form-group">
                <div class="col-sm-12">
                    <a class="btn btn-info" href="index.php">Back to Home Page</a>
                </div>
             </div>

           </div><!-- End of 3rd Column-->

 </div><!-- End of column which enables the creation of two columns-->

<hr>

        
         <div class = "Panel">
         	
              <table class = "table">
              	<thead>
                 <tr>
                   <th></th>
                   <th >Staff ID</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Registered</th>
                   <th>Promote/Demote</th>
                 </tr>
              	</thead>
              	<tbody>
              		<?php foreach (getAllUsers() as $user):?>
              			<tr>
                       <td>
                          <?php if(!isOwner($user['id'])):?>
                          <span><a class="btn btn-sm btn-outline-danger" href="/MuzindaSchoolDatabase3/editTeacher.php?staffID=<?php echo $user['employeeStaffID']; ?>">DELETE</a></span>
                          <?php endif; ?>
                       </td>
              			   <td><?php echo $user['employeeStaffID'];?></td>
              			   <td><?php echo $user['employeeFirstName'];?></td>
                       <td><?php echo $user['employeeLastName'];?></td>
                       <td><?php echo $user['created_at'];?></td>                       
              			   <td>
                           <?php if(!isOwner($user['id'])):?>
              			   	<?php if ($user['role_ID']==1):?>
      	<a href="/MuzindaSchoolDatabase3/procedures/adjustRole.php?role=demote&userId=<?php echo $user['id']; ?>" class ="bt btn-sm btn-warning">Demote from Admin</a>
              			   	    <?php elseif($user['role_ID']== 2):?> 
      	<a href="/MuzindaSchoolDatabase3/procedures/adjustRole.php?role=promote&userId=<?php echo $user['id']; ?>" class ="bt btn-sm btn-success">Promote to Admin</a>
              			   <?php endif; ?>
              			   <?php endif; ?>
              			   </td>	   
              			 </tr>	
                 <?php endforeach; ?>
              	</tbody>
              </table> 
         </div>     
    </div>
</div>
<?php
require_once __DIR__ . '/inc/footer.php';
?> 