<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();

$noticeTitle = request()->get('inputNoticetitle');
$noticeMessage= request()->get('inputNoticeMessage');
$user = findUserByAccessToken();
$user=$user['employeeStaffID'];
$staff_ID=$user;



  
try{
 $newNotice = addNewNotice($noticeTitle,$noticeMessage,$staff_ID);
    $session->getFlashBag()->add('success', 'Notice has been Successfully added');
    redirect('noticeboardDashboard.php');
}
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and notice could not be added, please try again');
   redirect('noticeboardDashboard.php');
}

