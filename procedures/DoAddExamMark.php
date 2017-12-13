<?php

require_once __DIR__. '/../inc/bootstrap.php';
requireAuth();

  // Exam ID
   //$NewExerciseID=generateNewExerciseID();
   
   //Class and Form
   $class_ID=trim(request()->get('class'));
   $form_ID=trim(request()->get('form'));
   $subject_ID=trim(request()->get('subject'));




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


   
 


// Data from the table
   $exerciseMark=trim(request()->get('examMark'.$x));
   $exerciseComment=trim(request()->get('examComment'.$x));


    echo $class_ID;
     echo $form_ID;
     echo $subject_ID;
      echo $Term;
       echo $exerciseMark;
       echo $exerciseComment;
      exit;
 


}

try{
 $NewExamMark = addNewExam($ExamID,$subject_ID,$form_ID,$class_ID,$student_ID,$staff_ID,$HighestPossibleMark,$examMark,$examComment,$examDate,$Term,$Year,$status);

     }
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and  the marks could not be added');
   redirect('index.php');
    }



   redirect('exerciseByID.php?class='.$class_ID.'& subject='.$subject_ID.'& form='.$form_ID);