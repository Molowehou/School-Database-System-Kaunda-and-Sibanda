
 <?php
   require __DIR__ . '/inc/bootstrap.php';
   requireAuth();
    require_once __DIR__ . '/inc/head.php';
  ?>

<?php
      if(!isAdmin()){
       $session->getFlashBag()->add('error', 'Not Authorized');
       redirect('index.php');
    }
?>
  <?php
    require_once __DIR__ . '/inc/header.php';
   ?>

   
    
    <?php
         require_once __DIR__ . '/inc/nav.php';
    ?>

	<main>
		<div class="main-content"> <!--main content-->
	      <h5 class="section-title">ADMIN SECTION</h5>

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
                       


                   </div> <!--End of Modal div -->

             
             <table class = "table">
                <thead>
                 <tr>
                   <th></th>
                   <th class="col-xs-2">Staff ID</th>
                   <th class="col-xs-2">First Name</th>
                   <th class="col-xs-2">Last Name</th>
                   <th class="col-xs-2">Registered</th>
                   <th class="col-xs-2">Promote/Demote</th>
                 </tr>
                </thead>
                <tbody>
                  <?php foreach (getAllUsers() as $user):?>
                    <tr>
                       <td>
                          <?php if(!isOwner($user['id'])):?>
                          <span><a class="bt btn-sm btn-warning" id="deletebtn" href="/MuzindaSchoolDatabase3/editTeacher.php?staffID=<?php echo $user['employeeStaffID']; ?>">DELETE</a></span>
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

				
		</div> <!--/main content-->
	</main>
			




		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>