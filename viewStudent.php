 <?php

require_once __DIR__ . '/inc/bootstrap.php';
requireAuth();
require_once __DIR__ . '/inc/head.php';



  if(!isAdmin()){
       $session->getFlashBag()->add('error', 'Not Authorized');
       redirect('index.php');}





$student = getStudent(request()->get('studentID'));




//if(!isAdmin()&& !isOwner($book['owner_id'])){
//$session->getFlashBag()->add('error', 'Not Authorized');
//redirect('books.php');
//}
 
$studentID = $student['studentID'];
$firstName = $student['studentFirstName'];
$middleName= $student['studentMiddleName'];
$lastName= $student['studentLastName'];
$gender = $student['studentGender_ID'];
$dateOfBirth= $student['studentDateOfBirth'];
$birthEntryNo = $student['studentbirthEntryNumber'];
$NationalID = $student['studentNationalID'];
$formerSchool= $student['studentFormerSchool'];
$specialNeed = $student['studentSpecialNeed'];
$homeAddress= $student['studentHomeAddress'];
$class = $student['studentClass_ID'];
$form= $student['studentForm_ID'];
$guardianTitle = $student['gdTitle_ID'];
$guardianFirstName = $student['gdFirstName'];
$guardianMiddleName= $student['gdMiddleName'];
$guardianlastName = $student['gdLastName'];
$guardianNationalID= $student['gdNationalID'];
$guardianRelationshipToStudent= $student['gdRelationshipToStudent'];
$guardianHomeAddress= $student['gdHomeAddress'];
$guardianOccupation = $student['gdOccupation'];
$guardianEmployerName= $student['gdEmployerName'];
$guardianBusinessPhone = $student['gdBusinessPhone'];
$guardianCellPhone = $student['gdCellphone'];
$guardianTelephone = $student['gdTelePhone'];
$guardianEmail= $student['gdEmail'];
$buttonText = 'Save Changes';
?>


   <?php 
    require_once __DIR__ . '/inc/header.php';
   ?>

     
    
     <?php 
         require_once __DIR__ . '/inc/nav.php';
    ?>




	<main>
		<div class="main-content"> <!--main content-->
			<h5 class="section-title">Student Details</h5>
        <?php echo display_errors(); ?>
         
          <form class = "form-horizontal" method= "post" action = "procedures/editStudent.php">
          	   <input type="hidden" name="studentID" value="<?php echo $student['studentID'];?>"/>
              <?php include_once __DIR__ ."/inc/StudentForm.php"; ?>
          

				
		</div> <!--/main content-->
	</main>

    <aside>
       <H4 class="section-title"></H4>

    

  <a class="btn" id="btnSave" href="/MuzindaSchoolDatabase3/editStudent.php?studentID=<?php echo $student['studentID']; ?>">Edit Student</a>
  

  </aside>



  

  </form>
		
   <?php 
     require_once __DIR__ . '/inc/footer.php';
  ?>



