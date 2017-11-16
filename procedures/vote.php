
<?php
require_once __DIR__. '/../inc/bootstrap.php';
requireAuth();


$vote = request()->get('vote');
$bookId = request()->get('bookId');

   switch (strtolower($vote)) {
      case 'up':
           vote($bookId, 1);
           break;
      case 'down':
           vote($bookId, -1);
             break;
}

$session->getFlashBag()->add('success','Vote has been successfully counted');
redirect('books.php');