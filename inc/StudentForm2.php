

<!-- Student Details -->
<hr>
<h6 class="form_title">STUDENT INFORMATION</h6>
<hr>
<!-- Student Details -->
<div class="modal-body row">
<div class="col-sm-6">


<div class="form-group">
    <label for="StudentID" class="col-sm-3 control-label">Student ID</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" id="StudentID" name="StudentID" placeholder="" value="
        <?php if(isset($studentID)){echo $studentID;} else echo generateNewStudentID();?>"
        readonly="readonly">
    </div>
</div>

<div class="form-group">
    <label for="firstName" class="col-sm-3 control-label">First Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder=""
         value="<?php if(isset($firstName)){echo $firstName; }?>">
    </div>
</div>

<div class="form-group">
    <label for="middleName" class="col-sm-3 control-label">Middle Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="middleName" name="middleName" placeholder=""
         value="<?php if(isset($middleName)){echo $middleName; }?>">
    </div>
</div>


<div class="form-group">
    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" 
        value="<?php if(isset($lastName)){echo $lastName; }?>">
    </div>
</div>

    <div class="form-group">
      <label for="gender" class="col-lg-3 control-label">Gender</label>
      <div class="col-sm-3">
        <select class="input-sm" id="gender" name="gender">
          <option <?php if(isset($gender)&& $gender==1){echo "selected"; }?> value="1">Male</option>
          <option <?php if(isset($gender)&& $gender==2){echo "selected"; }?> value="2">Female</option>
        </select>
      </div>
    </div>



<div class="form-group">
    <label for="dateOfBirth" class="col-sm-3 control-label">Date of Birth</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="dateOfBirth" name="dateOfBirth" placeholder="" 
        value="<?php if(isset($dateOfBirth)){echo $dateOfBirth; }?>">
    </div>
</div>

<div class="form-group">
    <label for="birthEntryNo" class="col-sm-3 control-label">Birth Entry No.</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="birthEntryNo" name="birthEntryNo" placeholder="" value="<?php if(isset($birthEntryNo)){echo $birthEntryNo; }?>">
    </div>
</div>

<div class="form-group">
    <label for="NationalID" class="col-sm-3 control-label">National ID</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="NationalID" name="NationalID" placeholder=""
         value="<?php if(isset($NationalID)){echo $NationalID; }?>">
    </div>
</div>



 </div> <!--End of First Column -->

<div class="col-sm-6"><!--Start of Second Column -->



<div class="form-group">
    <label for="formerSchool" class="col-sm-3 control-label">Former School</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="formerSchool" name="formerSchool" placeholder="" value="<?php if(isset($formerSchool)){echo $formerSchool; }?>">
    </div>
</div>


<div class="form-group">
      <label for="specialNeed" class="col-lg-3 control-label">Special Need</label>
      <div class="col-sm-9">
        <textarea class="form-control" rows="3" id="specialNeed" name="specialNeed" >
          <?php if(isset($specialNeed)){echo $specialNeed; }?>
        </textarea>
      </div>
    </div>


<div class="form-group">
      <label for="homeAddress" class="col-lg-3 control-label">Home Address</label>
      <div class="col-sm-9">
        <textarea class="form-control" rows="3" id="homeAddress" name="homeAddress">
          <?php if(isset($homeAddress)){echo $homeAddress; }?>
        </textarea>
      </div>
    </div>

      <div class="form-group">
      <label for="form" class="col-lg-3 control-label">Form</label>
      <div class="col-sm-3">
        <select class="input-sm" id="form" name="form">
           <option <?php if(isset($form) && $form==1){echo "selected"; }?> value="1">Form 1</option>
           <option <?php if(isset($form) && $form==2){echo "selected"; }?> value="2">Form 2</option>
           <option <?php if(isset($form) && $form==3){echo "selected"; }?> value="3">Form 3</option>
           <option <?php if(isset($form) && $form==4){echo "selected"; }?> value="4">Form 4</option>
           <option <?php if(isset($form) && $form==5){echo "selected"; }?> value="5">Form 5</option>
           <option <?php if(isset($form) && $form==6){echo "selected"; }?> value="6">Form 6</option>
        </select>
      </div>
    </div>


    <div class="form-group">
      <label for="class" class="col-lg-3 control-label">Class</label>
      <div class="col-sm-3">
        <select class="input-sm" id="class" name="class">
           <option <?php if(isset($class) && $class==1){echo "selected"; }?> value="1">A1</option>
           <option <?php if(isset($class) && $class==2){echo "selected"; }?> value="2">A2</option>
           <option <?php if(isset($class) && $class==3){echo "selected"; }?> value="3">A3</option>
           <option <?php if(isset($class) && $class==4){echo "selected"; }?> value="4">A4</option>
        </select>
      </div>
    </div>








</div><!-- End of Second Column-->

 </div><!-- End of body-->

<!-- /Student Details -->

<!-- Guardian Details -->

<hr>
   <h6 class="form_title">GUARDIAN DETAILS</h6>
<hr>

<div class="modal-body row">
<div class="col-sm-6">

    <div class="form-group">
      <label for="guardianTitle" class="col-lg-3 control-label">Title</label>
      <div class="col-sm-3">
        <select class="input-sm" id="guardianTitle" name="guardianTitle">
          <option <?php if(isset($guardianTitle)&& $guardianTitle==1){echo "selected"; }?> value="1">Mr</option>
          <option <?php if(isset($guardianTitle)&& $guardianTitle==2){echo "selected"; }?> value="2">Mrs</option>
          <option <?php if(isset($guardianTitle)&& $guardianTitle==3){echo "selected"; }?> value="3">Ms</option>
        </select>
      </div>
    </div>

<div class="form-group">
    <label for="guardianFirstName" class="col-sm-3 control-label">First Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="guardianFirstName" name="guardianFirstName" placeholder="" value="<?php if(isset($guardianFirstName)){echo $guardianFirstName; }?>">
    </div>
</div>

<div class="form-group">
    <label for="guardianMiddleName" class="col-sm-3 control-label">Middle Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="guardianMiddleName" name="guardianMiddleName" placeholder="" value="<?php if(isset($guardianMiddleName)){echo $guardianMiddleName; }?>">
    </div>
</div>


<div class="form-group">
    <label for="guardianlastName" class="col-sm-3 control-label">Last Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="guardianlastName" name="guardianlastName" placeholder="" value="<?php if(isset($guardianlastName)){echo $guardianlastName; }?>">
    </div>
</div>


<div class="form-group">
    <label for="guardianNationalID" class="col-sm-3 control-label">National ID</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="guardianNationalID" name="guardianNationalID" placeholder="" value="<?php if(isset($guardianNationalID)){echo $guardianNationalID; }?>">
    </div>
</div>

<div class="form-group">
    <label for="guardianRelationshipToStudent" class="col-sm-3 control-label">Relationship To Student</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" id="guardianRelationshipToStudent" name="guardianRelationshipToStudent" placeholder="" 
        value="<?php if(isset($guardianRelationshipToStudent)){echo $guardianRelationshipToStudent; }?>">
    </div>
</div>

<div class="form-group">
      <label for="guardianHomeAddress" class="col-lg-3 control-label">Home Address</label>
      <div class="col-sm-9">
        <textarea class="form-control" rows="3" id="guardianHomeAddress" name="guardianHomeAddress" >
         <?php if(isset($guardianHomeAddress)){echo($guardianHomeAddress); }?>
        </textarea>
      </div>
    </div>




 </div> <!--End of First Column -->

<div class="col-sm-6"><!--Start of Second Column -->

<div class="form-group">
    <label for="guardianOccupation" class="col-sm-3 control-label">Occupation</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" id="guardianOccupation" name="guardianOccupation" placeholder="" value="<?php if(isset($guardianOccupation)){echo $guardianOccupation; }?>">
    </div>
</div>

<div class="form-group">
    <label for="guardianEmployerName" class="col-sm-3 control-label">Employer Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="guardianEmployerName" name="guardianEmployerName" placeholder="" value="<?php if(isset($guardianEmployerName)){echo $guardianEmployerName; }?>">
    </div>
</div>

<div class="form-group">
    <label for="guardianBusinessPhone" class="col-sm-3 control-label">Business Phone</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="guardianBusinessPhone" name="guardianBusinessPhone" placeholder="" value="<?php if(isset($guardianBusinessPhone)){echo $guardianBusinessPhone; }?>">
    </div>
</div>

<div class="form-group">
    <label for="guardianCellPhone" class="col-sm-3 control-label">Cell Phone</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="guardianCellPhone" name="guardianCellPhone" placeholder="" value="<?php if(isset($guardianCellPhone)){echo $guardianCellPhone; }?>">
    </div>
</div>

<div class="form-group">
    <label for="guardianTelephone" class="col-sm-3 control-label">Telephone</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="guardianTelephone" name="guardianTelephone" placeholder="" value="<?php if(isset($guardianTelephone)){echo $guardianTelephone; }?>">
    </div>
</div>


<div class="form-group">
    <label for="guardianEmail" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="guardianEmail" name="guardianEmail" placeholder="" 
        value="<?php if(isset($guardianEmail)){echo $guardianEmail; }?>">
    </div>
</div>





</div><!-- End of Second Column-->

 </div><!-- End of body-->


 <!-- /Guardian Details -->

 