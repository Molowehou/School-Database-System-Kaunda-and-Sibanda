

<!-- TEACHER Details -->


    <div class="modal-body row"> <!-- Start of column which enables the creation of two columns-->

          <div class="col-sm-3 "><!--Start of 3rd Column -->

            <div class="form-group">
               <div class="col-sm-offset-3 col-sm-10">
               <button type="submit" class="btn" id="btnSave"><?php if(isset($buttonText)){echo $buttonText;} else{
              echo "SAVE NEW TEACHER";}?></button>
            </div>
         </div>

          </div><!-- End of 3rd Column-->

                    <div class="col-sm-3 "><!--Start of 3rd Column -->

            <div class="form-group">
               <div class="col-sm-offset-3 col-sm-10">
               <button type="submit" class="btn" id="btnCancel">CANCEL</button>
            </div>
         </div>

          </div><!-- End of 3rd Column-->

 </div><!-- End of column which enables the creation of two columns-->

<div class="reg_form">
   <hr>
   <h6 class="form_title">TEACHER INFORMATION</h6>
   <hr>


<div class="row">
<div class="col-sm-6">

<div class="form-group">
    <label for="StaffID" class="col-sm-3 control-label">Staff ID</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="StaffID" name="StaffID" value="
         <?php if(isset($StaffID)){echo $StaffID ;} else echo generateNewStaffID();?>"
         readonly="readonly">
    </div>
</div>

<div class="form-group">
    <label for="firstName" class="col-sm-3 control-label">First Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="firstName" name="firstName"  value="
        <?php if(isset($firstName)){echo $firstName ;}?>" required>
    </div>
</div>

<div class="form-group">
    <label for="middleName" class="col-sm-3 control-label">Middle Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="middleName" name="middleName"  value="<?php if(isset($middleName)){echo $middleName ;}?>">
    </div>
</div>


<div class="form-group">
    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="lastName" name="lastName" value="
        <?php if(isset($lastName)){echo $lastName;}?>" required>
    </div>
</div>

    <div class="form-group">
      <label for="gender" class="col-lg-3 control-label">Gender</label>
      <div class="col-sm-3">
        <select class="input-sm" id="gender" id="drop_dwn" name="gender">
          <option <?php if(isset($gender)&& $gender==1){echo "selected"; }?> value="1">Male</option>
          <option <?php if(isset($gender)&& $gender==2){echo "selected"; }?> value="2">Female</option>
        </select>
      </div>
    </div>



<div class="form-group">
    <label for="DateOfBirth" class="col-sm-3 control-label">Date of Birth</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="dateOfBirth" name="DateOfBirth" placeholder="" 
        value="<?php if(isset($dateOfBirth)){echo $dateOfBirth; }?>">
    </div>
</div>



<div class="form-group">
    <label for="NationalID" class="col-sm-3 control-label">National ID </label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="NationalID" name="NationalID" value="<?php if(isset($NationalID)){echo $NationalID ;}?>">
    </div>
</div>

<div class="form-group">
      <label for="EducationalQualifications" class="col-lg-3 control-label">Educational Qualifications</label>
      <div class="col-sm-8">
        <textarea class="form-control" rows="3"  id="HomeAddress" name="EducationalQualifications" id="EducationalQualifications"><?php if(isset($EducationalQualifications)){echo $EducationalQualifications ;}?></textarea>
      </div>
    </div>


 </div> <!--End of First Column -->

<div class="col-sm-6"><!--Start of Second Column -->




<div class="form-group">
    <label for="formerSchool" class="col-sm-3 control-label">FormerSchool</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="formerSchool" name="formerSchool" value="<?php if(isset($formerSchool)){echo $formerSchool ;}?>">
    </div>
</div>

<div class="form-group">
    <label for="CellPhone" class="col-sm-3 control-label">Cell:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="Form" name="CellPhone" value="
        <?php if(isset($CellPhone)){echo $CellPhone ;}?>">
    </div>
</div>

<div class="form-group">
    <label for="Telephone" class="col-sm-3 control-label">Telephone</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="Telephone" name="Telephone" value="
        <?php if(isset($Telephone)){echo $Telephone ;}?>">
    </div>
</div>

<div class="form-group">
    <label for="Email" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="Email" name="Email"  value="
        <?php if(isset($Email)){echo $Email ;}?>">
    </div>
</div>


<div class="form-group">
      <label for="HomeAddress" class="col-lg-3 control-label">Home Address</label>
      <div class="col-sm-8">
        <textarea class="form-control" rows="3" id="HomeAddress" name="HomeAddress" ><?php if(isset($HomeAddress)){echo $HomeAddress ;}?></textarea>
      </div>
    </div>

    <div class="form-group">
      <label for="ShortDescription" class="col-lg-3 control-label">Short Description</label>
      <div class="col-sm-8">
        <textarea class="form-control" rows="3" id="ShortDescription" name="ShortDescription" ><?php if(isset($ShortDescription)){echo $ShortDescription ;}?></textarea>
      </div>
    </div>



</div><!-- End of Second Column-->

 </div><!-- End of body-->

<!-- /Student Details -->



<!-- NEXT OF KIN DETAILS -->


<hr>
 <h6 class="form_title">NEXT OF KIN DETAILS</h6>
<hr>
<div class="modal-body row">
<div class="col-sm-6">

    <div class="form-group">
      <label for="Title" class="col-lg-3 control-label">Title</label>
      <div class="col-sm-9">
        <select class="input-sm" id="Title" name="Title">
          <option <?php if(isset($Title)&& $Title==1){echo "selected"; }?> value="1">Mr</option>
          <option <?php if(isset($Title)&& $Title==2){echo "selected"; }?> value="2">Mrs</option>
          <option <?php if(isset($Title)&& $Title==3){echo "selected"; }?> value="3">Ms</option>
        </select>
      </div>
    </div>

<div class="form-group">
    <label for="firstName1" class="col-sm-3 control-label">First Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="firstName1" name="firstName1" value="<?php if(isset($firstName1)){echo $firstName1;}?>">
    </div>
</div>

<div class="form-group">
    <label for="middleName1" class="col-sm-3 control-label">Middle Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="middleName1" name="middleName1" value="<?php if(isset($middleName1)){echo $middleName1 ;}?>">
    </div>
</div>


<div class="form-group">
    <label for="lastName1" class="col-sm-3 control-label">Last Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="lastName1" name="lastName1" value="<?php if(isset($lastName1)){echo $lastName1 ;}?>">
    </div>
</div>


<div class="form-group">
    <label for="NationalID1" class="col-sm-3 control-label">National ID</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="NationalID1" name="NationalID1"  value="<?php if(isset($NationalID1)){echo $NationalID1 ;}?>">
    </div>
</div>

<div class="form-group">
    <label for="RelationshipToTeacher1" class="col-sm-3 control-label">RelationshipToTeacher</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="RelationshipToTeacher1" name="RelationshipToTeacher1" value="<?php if(isset($RelationshipToTeacher1)){echo $RelationshipToTeacher1 ;}?>">
    </div>
</div>



<div class="form-group">
      <label for="HomeAddress1" class="col-lg-3 control-label">Home Address</label>
      <div class="col-sm-8">
        <textarea class="form-control" rows="3" id="HomeAddress1" name="HomeAddress1" ><?php if(isset($HomeAddress1)){echo $HomeAddress1 ;}?></textarea>
      </div>
    </div>




 </div> <!--End of First Column -->

<div class="col-sm-6"><!--Start of Second Column -->

<div class="form-group">
    <label for="Occupation" class="col-sm-3 control-label">Occupation</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="Occupation1" name="Occupation1" value="<?php if(isset($Occupation1)){echo $Occupation1 ;}?>">
    </div>
</div>

<div class="form-group">
    <label for="EmployerName1" class="col-sm-3 control-label">EmployerName</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="EmployerName1" name="EmployerName1" value="<?php if(isset($EmployerName1)){echo $EmployerName1 ;}?>">
    </div>
</div>

<div class="form-group">
    <label for="BusinessPhone1" class="col-sm-3 control-label">BusinessPhone</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="BusinessPhone1" name="BusinessPhone1" value="<?php if(isset($BusinessPhone1)){echo $BusinessPhone1 ;}?>">
    </div>
</div>

<div class="form-group">
    <label for="CellPhone1" class="col-sm-3 control-label">Cell Phone</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="CellPhone1" name="CellPhone1" value="<?php if(isset($CellPhone1)){echo $CellPhone1 ;}?>">
    </div>
</div>


<div class="form-group">
    <label for="Email1" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="Email1" name="Email1"  value="<?php if(isset($Email1)){echo $Email1 ;}?>">
    </div>
</div>


</div><!-- End of Second Column-->

 </div><!-- End of body-->
</div>


 <!-- /Guardian Details -->

 <hr>



<hr>