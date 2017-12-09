<?php

require_once __DIR__. '/../inc/bootstrap.php';
requireAuth();



$bookId = request()->get('bookId');

  
try{
	if(!isAdmin() || !isOwner($book['owner_id'])){
$session->getFlashBag()->add('error', 'Not Authorized');
redirect('books.php');
   } else {
 $newBook = deleteBook($bookId); 
     $session->getFlashBag()->add('success', 'Book has been Successfully deleted');
     redirect('books.php');
    }
}
catch(\exception $e){
	 $session->getFlashBag()->add('error', 'Error ocurred and Book could not be deleted');
  redirect('books.php');
   
}

