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





  
try{
 $updatedStudent = updateStudent(
    $studentID,$firstName,$middleName,$lastName,$gender,$dateOfBirth,$birthEntryNo,$NationalID,$formerSchool,
    $specialNeed,$homeAddress,$form,$class,$guardianTitle,$guardianFirstName,$guardianMiddleName,$guardianlastName,
    $guardianNationalID,$guardianRelationshipToStudent,$guardianHomeAddress,$guardianOccupation,$guardianEmployerName,
    $guardianBusinessPhone,$guardianCellPhone,$guardianTelephone,$guardianEmail);

    $session->getFlashBag()->add('success','Student information has been succesfully updated');
    redirect('studentDashboard.php');
}
catch(\exception $e){
	 $session->getFlashBag()->add('error','An error occured and the book could not be updated');
     redirect('editStudent.php?StudentID='.$studentID);
}

