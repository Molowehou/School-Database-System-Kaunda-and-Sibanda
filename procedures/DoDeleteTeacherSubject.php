<?php

require_once __DIR__. '/../inc/bootstrap.php';
requireAuth();

   $ExerciseID=trim(request()->get('exercise'));


try{

 $DeletedTeacherSubject = deleteTeacherClass($ExerciseID);



$session->getFlashBag()->add('success', 'Teacher has been removed from the class');

redirect('teacherSubjectsDashboard.php');

     }
catch(\exception $e){
   $session->getFlashBag()->add('error', 'Error ocurred and  the teacher could not be removed from the class');
   redirect('index.php');
    }


