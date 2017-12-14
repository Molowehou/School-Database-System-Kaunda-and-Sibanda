<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();

  // ExerciseID
   $NewExamID=generateNewExamID();
   
   //Class
   $ExamID=trim(request()->get('exam'));
   $subject_ID=trim(request()->get('subject'));
   $class_ID=trim(request()->get('class'));
   $form_ID=trim(request()->get('form'));




//Creation of the temp Data Table
   CreateExamTempTable();

$x=0;
foreach (getClassByID($form_ID,$class_ID) as $student) {
$x++;

// Subject Class StaffID 
$ExamID=trim(request()->get('exam'));
$form_ID=trim(request()->get('form'));
$subject_ID=trim(request()->get('subject'));
$class_ID=trim(request()->get('class'));
$student_ID=$student['studentID'];
      $user = findUserByAccessToken();
      $user=$user['employeeStaffID'];
$staff_ID=$user;


// Data to be added to each exercise
$Term =trim(request()->get('Term'));
$Year =trim(request()->get('Year'));
// Data from the table
   $examMark=trim(request()->get('examMark'.$x));
   $examComment=trim(request()->get('examComment'.$x));

echo $ExamID;
 echo $Term;
 echo $Year;

 

try{


 $NewExam = addNewTempExam($ExamID,$subject_ID,$form_ID,$class_ID,$student_ID,$staff_ID,$HighestPossibleMark,$examMark,$examComment,$Term,$Year);

     }
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and  the marks could not be added');
   redirect('index.php');
    }

}

//Update The Two Tables
 UpdateExamTable();


 DeleteExamTempTable();


redirect('examsList.php?class='.$class_ID.'& subject='.$subject_ID.'& form='.$form_ID);