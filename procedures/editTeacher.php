<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();


$StaffID = trim(request()->get('StaffID'));
$firstName = trim(request()->get('firstName'));
$middleName= trim(request()->get('middleName'));
$lastName= trim(request()->get('lastName'));
$Gender = trim(request()->get('Gender'));
$DateOfBirth= trim(request()->get('DateOfBirth'));
$NationalID = trim(request()->get('NationalID'));
$EducationalQualifications= trim(request()->get('EducationalQualifications'));
$formerSchool = trim(request()->get('formerSchool'));
$CellPhone= trim(request()->get('CellPhone'));
$Telephone = trim(request()->get('Telephone'));
$Email= trim(request()->get('Email'));
$HomeAddress= trim(request()->get('HomeAddress'));
$ShortDescription = trim(request()->get('ShortDescription'));
$Title= trim(request()->get('Title'));
$firstName1 = trim(request()->get('firstName1'));
$middleName1= trim(request()->get('middleName1'));
$lastName1 = trim(request()->get('lastName1'));
$NationalID1= trim(request()->get('NationalID1'));
$RelationshipToTeacher1 = trim(request()->get('RelationshipToTeacher1'));
$HomeAddress1= trim(request()->get('HomeAddress1'));
$Occupation1 = trim(request()->get('Occupation1'));
$EmployerName1= trim(request()->get('EmployerName1'));
$BusinessPhone1 = trim(request()->get('BusinessPhone1'));
$CellPhone1= trim(request()->get('CellPhone1'));
$Email1= trim(request()->get('Email1'));

  
echo $firstName."<br>";
echo $middleName."<br>";
echo $lastName."<br>";
echo $Gender."<br>";
echo $DateOfBirth."<br>";
echo $NationalID."<br>";
echo $EducationalQualifications."<br>";
echo $formerSchool."<br>";
echo $CellPhone."<br>";
echo $Telephone."<br>";
echo $Email."<br>";
echo $HomeAddress."<br>";
echo $ShortDescription."<br>";
echo $Title."<br>";
echo $firstName1."<br>";
echo $middleName1."<br>";
echo $lastName1."<br>";
echo $NationalID1."<br>";
echo $RelationshipToTeacher1."<br>";
echo $HomeAddress1."<br>";
echo $Occupation1."<br>";
echo $EmployerName1."<br>";
echo $BusinessPhone1."<br>";
echo $CellPhone1."<br>";
echo $Email1."<br>";



try{
 $newTeacher = editTeacher($StaffID,$firstName,$middleName,$lastName,$Gender,
 	                       $DateOfBirth,$NationalID,$EducationalQualifications,
 	                       $formerSchool,$CellPhone,$Telephone,$Email,$HomeAddress,
 	                       $ShortDescription,$Title,$firstName1,$middleName1,$lastName1,
 	                       $NationalID1,$RelationshipToTeacher1,$HomeAddress1,$Occupation1,
 	                       $EmployerName1,$BusinessPhone1,$CellPhone1,$Email1);

  $session->getFlashBag()->add('success', 'Teacher Information has been Successfully updated');
    redirect('staffDashBoard.php');
}
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and Teacher information could not be updated');
   redirect('staffDashBoard.php?StaffID='.$StaffID);
}
