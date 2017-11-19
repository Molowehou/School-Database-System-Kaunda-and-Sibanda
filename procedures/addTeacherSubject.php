<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();

$StaffID = request()->get('StaffID');
$SubjectID= request()->get('Subject');
$FormID= request()->get('Form');
$ClassID= request()->get('Class');


try{
 $newTeacherSubject = addTeacherSubject($StaffID,$SubjectID,$FormID,$ClassID);
    $session->getFlashBag()->add('success', 'Teacher has been Successfully added');
    redirect('teacherSubjectsDashboard.php');
}
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and Teacher could not be added');
   redirect('add.php');
}
