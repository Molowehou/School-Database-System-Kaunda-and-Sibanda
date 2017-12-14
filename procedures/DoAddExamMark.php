<?php

require_once __DIR__. '/../inc/bootstrap.php';
requireAuth();

  // Exam ID
   $NewExerciseID=generateNewExamID();
   
   //Class and Form
   $class_ID=trim(request()->get('class'));
   $form_ID=trim(request()->get('form'));
   $subject_ID=trim(request()->get('subject'));
   $ExamID=$NewExerciseID;



$x=0;
foreach (getClassByID($form_ID,$class_ID) as $student) {
$x++;

  // Subject Class StaffID 
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



try{
 $NewExamMark = addNewExam($ExamID,$subject_ID,$form_ID,$class_ID,$student_ID,$staff_ID,$examMark,$examComment,$Term,$Year);

     }
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and  the marks could not be added');
   redirect('index.php');
    }


}
   redirect('examsList.php?class='.$class_ID.'& subject='.$subject_ID.'& form='.$form_ID);