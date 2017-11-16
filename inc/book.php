
 <div class="media well">
  <?php if  (isAuthenticated()): ?>
 	<div class="media-left">
	 	<div class ="btn-group-vertical" role ="group">
	 		<a href="/MuzindaSchoolDatabase1/procedures/vote.php?vote=up&bookId=<?php echo $book['id']?>">
	 	      <span class="glyphicon glyphicon-triangle-top"></span></a>
	 	      <span>
	 	    <a href="/MuzindaSchoolDatabase1/procedures/vote.php?vote=down&bookId=<?php echo $book['id']?>">
          <span class="glyphicon glyphicon-triangle-top"></span></a>
	 	      <span class="glyphicon glyphicon-triangle-bottom"></span></a>
	 	</div>
 	</div>
   <?php endif; ?>
     <div class="media-body">
       <h4 class="media-heading"><?php echo $book['Name']; ?></h4>
       <p><?php echo $book['BookDescription']; ?> </p>
       <p>
         <span><a href="/MuzindaSchoolDatabase1/edit.php?bookId=<?php echo $book['id']; ?>">Edit</a></span>
         <span><a href="/MuzindaSchoolDatabase1/procedures/deleteBook.php?bookId=<?php echo $book['id']; ?>">Delete</a></span>
       </p>
       
     </div>
 </div>
