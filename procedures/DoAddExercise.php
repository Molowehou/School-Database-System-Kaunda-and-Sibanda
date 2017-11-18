<?php

require_once __DIR__. '/../inc/bootstrap.php';
requireAuth();

// ExerciseID
   $NewExerciseID=generateNewExerciseID();
   $class_ID=trim(request()->get('class'));

$x=0;
foreach (getClassByID($class_ID) as $student) {
$x++;

// Subject Class StaffID 
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



echo $NewExerciseID."<br>";
echo $subject_ID."<br>";
echo $class_ID."<br>";
echo $student_ID."<br>";
echo $staff_ID."<br>";
echo $Topic."<br>";
echo $SubTopic."<br>";
echo $Title."<br>";
echo $HighestPossibleMark."<br>";
echo $exerciseMark."<br>";
echo $exerciseComment."<br>";


try{
 $NewExercise = addNewExercise($NewExerciseID,$subject_ID,
              $class_ID,$student_ID,$staff_ID,$Topic,$SubTopic,$Title,$HighestPossibleMark,$exerciseMark,
                $exerciseComment);

     }
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and some of the marks could not be added');
   redirect('index.php');
    }

}

   redirect('exerciseByID.php?class='.$class_ID.'& subject='.$subject_ID);