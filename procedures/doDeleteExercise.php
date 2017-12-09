<?php

require_once __DIR__. '/../inc/bootstrap.php';
requireAuth();

       $form = request()->get('form');
       $class = request()->get('class');
       $subject = request()->get('subject');




      $ExerciseID = request()->get('ExerciseID');


  
try{
	if(!isset($ExerciseID)){
$session->getFlashBag()->add('error', 'Could not Find The Exercise');
redirect('index.php');
   } else {
 $deletedExercise = deleteExercise($ExerciseID); 
     $session->getFlashBag()->add('success', 'Exercise has been deleted');

     redirect('index.php');
    }
}
catch(\exception $e){
	 $session->getFlashBag()->add('error', 'Error ocurred and Exercise could not be deleted');
  redirect('index.php');
   
}

