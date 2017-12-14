<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();

  // ExerciseID
   $NewExerciseID=generateNewExerciseID();
   
   //Class
   $ExerciseID=trim(request()->get('exercise'));
   $subject_ID=trim(request()->get('subject'));
   $class_ID=trim(request()->get('class'));
   $form_ID=trim(request()->get('form'));

//Creation of the temp Data Table
   CreateMarksTempTable();

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
$Topic =trim(request()->get('Topic'));
$SubTopic= trim(request()->get('SubTopic'));
$Title= trim(request()->get('Title'));
$HighestPossibleMark= trim(request()->get('HighestPossibleMark'));

// Data from the table
   $exerciseMark=trim(request()->get('exerciseMark'.$x));
   $exerciseComment=trim(request()->get('exerciseComment'.$x));



//Error Handlers
   if(empty($Topic) or empty($SubTopic) or empty($Title) or empty($HighestPossibleMark)){
  $session->getFlashBag()->add('error', "Could not Save the Exercise.Make sure the Topic, Sub Topic, Title and Highest Possible Mark are entered.");

    redirect('exerciseByID.php?class='.$class_ID.'& subject='.$subject_ID.'& form='.$form_ID);
    exit;
}

try{


 $NewExercise = addNewTempExercise($ExerciseID,$subject_ID,$form_ID,$class_ID,$student_ID,$staff_ID,$Topic,$SubTopic,$Title,$HighestPossibleMark,$exerciseMark,$exerciseComment);

     }
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and  the marks could not be added');
   redirect('index.php');
    }

}


 UpdateTable();

 DeleteMarksTempTable();


redirect('exerciseByID.php?class='.$class_ID.'& subject='.$subject_ID.'& form='.$form_ID);