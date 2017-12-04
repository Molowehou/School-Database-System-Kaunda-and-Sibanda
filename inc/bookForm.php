

<!-- TEACHER Details -->


    <div class="modal-body row"> <!-- Start of column which enables the creation of two columns-->

          <div class="col-sm-3 "><!--Start of 3rd Column -->

            <div class="form-group">
               <div class="col-sm-offset-3 col-sm-10">
               <button type="submit" class="btn" id="btnSave"><?php if(isset($buttonText)){echo $buttonText;} else{
              echo "SAVE NEW BOOK";}?></button>
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
  
<div class="row">
<div class="col-sm-8">

<div class="form-group">
    <label for="StaffID" class="col-sm-3 control-label">BOOK ID</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="StaffID" name="StaffID" value="
         <?php if(isset($StaffID)){echo $StaffID ;} else echo generateNewStaffID();?>"
         readonly="readonly">
    </div>
</div>

<div class="form-group">
    <label for="firstName" class="col-sm-3 control-label">Title</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="firstName" name="firstName"  value="
        <?php if(isset($firstName)){echo $firstName ;}?>" required>
    </div>
</div>

<div class="form-group">
    <label for="middleName" class="col-sm-3 control-label">Author(s)</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="middleName" name="middleName"  value="<?php if(isset($middleName)){echo $middleName ;}?>">
    </div>
</div>

  <div class="form-group">
      <label for="EducationalQualifications" class="col-lg-3 control-label">Book Description</label>
      <div class="col-sm-8">
        <textarea class="form-control" rows="3"  id="HomeAddress" name="EducationalQualifications" id="EducationalQualifications"><?php if(isset($EducationalQualifications)){echo $EducationalQualifications ;}?></textarea>
      </div>
    </div>




    <div class="form-group">
      <label for="gender" class="col-lg-3 control-label">Category</label>
      <div class="col-sm-3">
        <select class="input-sm" id="gender" id="drop_dwn" name="gender">
          <option value="1">Fiction</option>
          <option value="2">Romance</option>
        </select>
      </div>
    </div>


     <div class="form-group">
      <label for="gender" class="col-lg-3 control-label">Condition</label>
      <div class="col-sm-3">
        <select class="input-sm" id="gender" id="drop_dwn" name="gender">
          <option value="1">New</option>
          <option value="2">Old</option>
          <option value="3">Torn</option>
        </select>
      </div>
    </div>

     <div class="form-group">
      <label for="gender" class="col-lg-3 control-label">Location</label>
      <div class="col-sm-3">
        <select class="input-sm" id="gender" id="drop_dwn" name="gender">
          <option value="1">Main Library</option>
          <option value="2">Reserve Section</option>
        </select>
      </div>
    </div>




<div class="form-group">
      <label for="EducationalQualifications" class="col-lg-3 control-label">Comments</label>
      <div class="col-sm-8">
        <textarea class="form-control" rows="3"  id="HomeAddress" name="EducationalQualifications" id="EducationalQualifications"><?php if(isset($EducationalQualifications)){echo $EducationalQualifications ;}?></textarea>
      </div>
    </div>


 </div> <!--End of First Column -->

<div class="col-sm-2"><!--Start of Second Column -->




</div><!-- End of Second Column-->

 </div><!-- End of body-->





