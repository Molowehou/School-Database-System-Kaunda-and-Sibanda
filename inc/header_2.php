<div class="container col-12">	

		<header class="clearfix">
			<div id="header_content" class="clearfix">
				<h1 class="title">
					<a href="#">The School Management System</a></h1>


				<?php  if (!isAuthenticated()): ?>
				
		
				<?php else: ?>
	
                <div class="dropdown">
                     <button class="btn dropdown-toggle" id="btnChange" type="button" data-toggle="dropdown"><?php 
                         if(request()->cookies->has('access_token')){
                         $user = findUserByAccessToken();
                         echo $user['employeeFirstName'];
                         echo str_repeat('&nbsp;', 1);
                         echo $user['employeeLastName'];
                     }?>
                     </button>
                     
                     <ul class="dropdown-menu">
                         <li><a class="btn" id="changepwd"  href="account.php">CHANGE PASSWORD</a></li>
                         <li><a class="btn" id="logout" href="procedures/DoLogout.php">LOG OUT</a></li>
                      </ul>
                </div>

           




				
				<?php endif; ?>
			</div>
		</header>