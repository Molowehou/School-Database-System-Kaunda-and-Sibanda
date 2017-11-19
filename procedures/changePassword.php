 <?php

require_once __DIR__. '/../inc/bootstrap.php';
requireAuth();


$current_password = request()->get('current_password');
$new_password = request()->get('new_password');
$confirm_password= request()->get('confirm_password');


if($new_password != $confirm_password){
	$session->getFlashBag()->add('error', 'New Passwords do not match,Please try again');
	redirect('account.php');
} 



$user = findUserByAccessToken();

if(empty($user)){
	$session->getFlashBag()->add('error', 'An error occured, Try Again. If it persists contact The Administrator'); 
	redirect('account.php');
}

if(!password_verify($current_password, $user['passwords'])) {	
     $session->getFlashBag()->add('error','Invalid Password');   
     redirect('account.php');
}


$updated =updatePassword(password_hash($new_password,PASSWORD_DEFAULT),$user['id']); 

if(!$updated){
	$session->getFlashBag()->add('error', 'An error occured, Could not update the password. Try again or Contact Admin'); 
	redirect('account.php');
}


$session->getFlashBag()->add('success', 'You have successfully changed your password'); 
redirect('index.php');  