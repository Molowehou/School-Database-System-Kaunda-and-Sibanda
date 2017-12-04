<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();

$studentID = request()->get('StudentID');
$firstName = request()->get('firstName');
$middleName= request()->get('middleName');
$lastName= request()->get('lastName');
$gender = request()->get('gender');
$dateOfBirth= request()->get('dateOfBirth');
$birthEntryNo = request()->get('birthEntryNo');
$NationalID = request()->get('NationalID');
$formerSchool= request()->get('formerSchool');
$specialNeed = request()->get('specialNeed');
$homeAddress= request()->get('homeAddress');
$form = request()->get('form');
$class= request()->get('class');
$guardianTitle = request()->get('guardianTitle');
$guardianFirstName = request()->get('guardianFirstName');
$guardianMiddleName= request()->get('guardianMiddleName');
$guardianlastName = request()->get('guardianlastName');
$guardianNationalID= request()->get('guardianNationalID');
$guardianRelationshipToStudent= request()->get('guardianRelationshipToStudent');
$guardianHomeAddress= request()->get('guardianHomeAddress');
$guardianOccupation = request()->get('guardianOccupation');
$guardianEmployerName= request()->get('guardianEmployerName');
$guardianBusinessPhone = request()->get('guardianBusinessPhone');
$guardianCellPhone = request()->get('guardianCellPhone');
$guardianTelephone = request()->get('guardianTelephone');
$guardianEmail= request()->get('guardianEmail');


echo $studentID."<br>";
echo $firstName."<br>";
echo $middleName."<br>";
echo $lastName."<br>";
echo $gender."<br>";
echo $dateOfBirth."<br>";
echo $birthEntryNo."<br>";
echo $NationalID."<br>";
echo $formerSchool."<br>";
echo $specialNeed."<br>";
echo $homeAddress."<br>";
echo $form."<br>";
echo $class."<br>";
echo $guardianTitle."<br>";
echo $guardianFirstName."<br>";
echo $guardianMiddleName."<br>";
echo $guardianlastName."<br>";
echo $guardianNationalID."<br>";
echo $guardianRelationshipToStudent."<br>";
echo $guardianHomeAddress."<br>";
echo $guardianOccupation."<br>";
echo $guardianEmployerName."<br>";
echo $guardianBusinessPhone."<br>";
echo $guardianCellPhone."<br>";
echo $guardianTelephone."<br>";
echo $guardianEmail."<br>";


if(empty($firstName)){
	$session->getFlashBag()->add('error', "Error occured and student could not be saved.Please ensure you complete All The required fields such as Student Name and Surname");
	redirect('studentDashboard.php');
    exit;
}


$user= findStudentByStudentID($studentID);

if(!empty($user)){
	$session->getFlashBag()->add('error', "Student with the Student ID $studentID  has already been added to the system.Click ADD NEW STUDENT to add another student.");
	redirect('studentDashboard.php');
    exit;
}






try{
 $newStudent = addStudent (
 	$studentID,$firstName,$middleName,$lastName,$gender,$dateOfBirth,$birthEntryNo,$NationalID,$formerSchool,
    $specialNeed,$homeAddress,$form,$class,$guardianTitle,$guardianFirstName,$guardianMiddleName,$guardianlastName,
   $guardianNationalID,$guardianRelationshipToStudent,$guardianHomeAddress,$guardianOccupation,$guardianEmployerName,
   $guardianBusinessPhone,$guardianCellPhone,$guardianTelephone,$guardianEmail);

    $session->getFlashBag()->add('success', 'Student has been Successfully saved in the database');
    redirect('studentDashboard.php');
}
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and Student could not be  to the Database. Please try again or Contact The Administrator if the error persists');
   redirect('studentDashboard.php');
}
