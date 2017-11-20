<?php

require_once __DIR__. '/../inc/bootstrap.php';
//requireAuth();

  // ExerciseID
   $ExerciseID=trim(request()->get('exercise'));
   $form_ID=trim(request()->get('form'));
   $class_ID=trim(request()->get('class'));



$x=0;
foreach (getStudentExerciseByID($form_ID,$class_ID,$ExerciseID)) as $student) {
$x++;

// ExerciseID
   $ExerciseID=trim(request()->get('exercise'));
   $form_ID=trim(request()->get('form'));
   $class_ID=trim(request()->get('class'));

// Data to be added to each exercise
  $Topic =trim(request()->get('Topic'));
  $SubTopic= trim(request()->get('SubTopic'));
  $Title= trim(request()->get('Title'));
  $HighestPossibleMark= trim(request()->get('HighestPossibleMark'));


// Data from the table
   $student_ID =trim(request()->get('student'));
   $ExerciseID=trim(request()->get('exercise'));
   $SubTopic= trim(request()->get('SubTopic'));
   $exerciseMark=trim(request()->get('exerciseMark'.$x));
   $exerciseComment=trim(request()->get('exerciseComment'.$x));

try {
 $EditExercise = updateExercise($student_ID,$ExerciseID,$Topic,
        $SubTopic,$Title,$HighestPossibleMark,$exerciseMark,
        $exerciseComment,$StudentExerciseID); }

catch(\exception $e){
      redirect('index.php');
    }

}

   redirect('exerciseByID.php?class='.$class_ID.'& subject='.$subject_ID.'& form='.$form_ID);