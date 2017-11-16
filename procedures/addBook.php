<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();

$bookTitle = request()->get('title');
$bookDescription= request()->get('description');

  
try{
 $newBook = addBook($bookTitle,$bookDescription);
    $session->getFlashBag()->add('success', 'Book has been Successfully added');
    redirect('books.php');
}
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and Book could not be added');
   redirect('add.php');
}

