<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();


$bookId = request()->get('bookId');
$bookTitle = request()->get('title');
$bookDescription= request()->get('description');

  
try{
 $newBook = updateBook($bookId,$bookTitle,$bookDescription);
    $session->getFlashBag()->add('success','Book has been succesfully updated');
    redirect('books.php');
}
catch(\exception $e){
	 $session->getFlashBag()->add('error','An error occured and the book could not be updated');
     redirect('edit.php?bookId='.$bookId);
}

