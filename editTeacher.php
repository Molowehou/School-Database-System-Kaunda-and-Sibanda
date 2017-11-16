 <?php

require_once __DIR__ . '/inc/bootstrap.php';
//requireAuth();
require_once __DIR__ . '/inc/head.php';
//require_once __DIR__ . '/inc/nav.php';


$teacher = getTeacher(request()->get('staffID'));


//if(!isAdmin()&& !isOwner($book['owner_id'])){
//$session->getFlashBag()->add('error', 'Not Authorized');
//redirect('books.php');
//}
 

$StaffID = $teacher['employeeStaffID'];
$firstName = $teacher['employeeFirstName'];
$middleName= $teacher['employeeMiddleName'];
$lastName= $teacher['employeeLastName'];
$Gender = $teacher['employeeGender_ID'];
$DateOfBirth=$teacher['employeeDOB'];
$NationalID = $teacher['employeeNationalID'];
$EducationalQualifications= $teacher['employeeEducationalQualifications'];
$formerSchool = $teacher['employeeFormerSchool'];
$CellPhone= $teacher['employeeCellphone'];
$Telephone = $teacher['employeeTelephone'];
$Email= $teacher['employeeEmail'];
$HomeAddress= $teacher['employeeHomeAddress'];
$ShortDescription = $teacher['employeeShortDescription'];
$Title= $teacher['nokTitle_ID'];
$firstName1 = $teacher['nokFirstName'];
$middleName1= $teacher['nokMiddleName'];
$lastName1 = $teacher['nokLastName'];
$NationalID1= $teacher['nokNationalID'];
$RelationshipToTeacher1 = $teacher['nokRelationshipToTeacher'];
$HomeAddress1= $teacher['nokHomeAddress'];
$Occupation1 = $teacher['nokOccupation'];
$EmployerName1= $teacher['nokEmployerName'];
$BusinessPhone1 = $teacher['nokBusinessPhone'];
$CellPhone1= $teacher['nokCellphone'];
$Email1= $teacher['nokEmail'];

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
	      <h5 class="section-title">TEACHER REGISTRATION</h5>

          <form class = "form-horizontal" method= "post" action = "procedures/editTeacher.php">
          	   <input type="hidden" name="staffID" value="<?php echo $teacher['employeeStaffID'];?>"/>
              <?php include_once __DIR__ ."/inc/teacherForm.php"; ?>
          </form>
             


				
		</div> <!--/main content-->
	</main>
			



		
   <?php 
     require_once __DIR__ . '/inc/footer.php';
  ?>










