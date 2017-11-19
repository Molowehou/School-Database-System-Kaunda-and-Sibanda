<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();

$StaffID = request()->get('StaffID');
$SubjectID= request()->get('Subject');
$FormID= request()->get('Form');
$ClassID= request()->get('Class');


try{
 $newTeacherSubject = addTeacherSubject($StaffID,$SubjectID,$FormID,$ClassID);
    $session->getFlashBag()->add('success', 'Teacher has been su Successfully added');
    redirect('teacherSubjectsDashboard.php');
}
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Teacher could not be assigned to the class, please ensure that no other Teacher has already been assigned to the class.');
   redirect('teacherSubjectsDashboard.php');
}
