<?php

require_once __DIR__. '/../inc/bootstrap.php';

$password= request()->get('password');
$confirm_password = request()->get('confirm_password');
$StaffID = request()->get('StaffID');

if($password!=$confirm_password){
	$session->getFlashBag()->add('error', 'New Passwords do not match,Please try again');
	redirect('adminDashboard.php');
	 exit;
}

$user= findUserByStaffID($StaffID);

if(!empty($user)){
	$session->getFlashBag()->add('error', 'User with the Staff ID already exists.');
	redirect('adminDashboard.php');
	 exit;
}

  

$hashed = password_hash($password,PASSWORD_DEFAULT);

$user = createUser($StaffID,$hashed);
    $session->getFlashBag()->add('success', 'User Successfully Registered');
    redirect('adminDashboard.php');



