<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();

$StaffID = request()->get('StaffID');
$SubjectID= request()->get('Subject');
$FormID= request()->get('Form');
$ClassID= request()->get('Class');


$TeacherID = getTeacher($StaffID);
$TeacherName=$TeacherID['employeeFirstName'];
$TeacherLastName=$TeacherID['employeeLastName'];


 $subject=getSubjectByID($SubjectID);
  $subjectName=$subject['subjectName'];

try{
 $newTeacherSubject = addTeacherSubject($StaffID,$SubjectID,$FormID,$ClassID);
    $session->getFlashBag()->add('success', $TeacherName .' '.$TeacherLastName.' has been succesfully asigned to the subject');
    redirect('teacherSubjectsDashboard.php');
}
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Teacher could not be assigned to the class, please ensure that no other Teacher has already been assigned to the class.');
   redirect('teacherSubjectsDashboard.php');
}
