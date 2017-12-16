
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
	      <h5 class="section-title">NOTICEBOARD DASHBOARD</h5>
          <?php echo display_errors(); ?>
          <?php echo display_success(); ?>
                  

             
             <table class = "table">
                <thead>
                 <tr>
                   <th></th>
                   <th class="col-xs-2">Notice ID</th>
                   <th class="col-xs-2">Title</th>
                   <th class="col-xs-4">Message</th>
                   <th class="col-xs-2">Date and Time</th>
                 </tr>
                </thead>
                <tbody>
                  <?php foreach (getAllNotices() as $user):?>
                    <tr>
                       <td>
                          <span><a class="bt btn-sm btn-warning" id="btnInDelete" href="/MuzindaSchoolDatabase3/procedures/adjustStatus.php?Status=Deactivate&userId=<?php echo $user['ID']; ?>">DELETE</a></span>
                         
                       </td>
                       <td><?php echo $user['NoticeID'];?></td>
                       <td><?php echo $user['Title'];?></td>
                       <td><?php echo $user['Message'];?></td>
                       <td><?php echo $user['created_at'];?></td>     
                     </tr>  
                 <?php endforeach; ?>
                </tbody>
              </table> 

				
		</div> <!--/main content-->
	</main>
			

  <aside>
    <H4 class="section-title"></H4>

      <!-- Button to trigger modal -->
                       <button type="button" class="btn" id="btnSave" data-toggle="modal" data-target="#exampleModal">ADD NEW NOTICE
                       </button>

        <!-- Modal -->
                       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                           <div class="modal-content">
                             
                                 <div class="modal-body">
                                 <form class = "form-horizontal" method= "post" action = "procedures/DoAddNotice.php">
              
                                     <?php include __DIR__ ."/inc/NoticeForm.php"; ?>

                                 </form>

                             </div>   <!--/Modal-body --> 
                           </div> <!--/Modal-content --> 

                        </div> <!--/Modal-dialog -->
                       


                   </div> <!--End of Modal div -->


    

  </aside>



		
  <?php
     require_once __DIR__ . '/inc/footer.php';
  ?>