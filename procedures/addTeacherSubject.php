<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();

$StaffID = request()->get('StaffID');
$subjectID= request()->get('Subject');
$classID= request()->get('Class');



echo $StaffID;
echo $subjectID;
echo $classID;


try{
 $newTeacherSubject = addTeacherSubject($StaffID,$subjectID,$classID);
    $session->getFlashBag()->add('success', 'Teacher has been Successfully added');
    redirect('assignSubjects.php');
}
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and Teacher could not be added');
   redirect('add.php');
}
