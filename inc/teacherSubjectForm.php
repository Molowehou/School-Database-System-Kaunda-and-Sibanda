  

    <div class="form-group">
      <label for="StaffID" class="col-lg-3 control-label">Staff ID</label>
      <div class="col-sm-9">
       
       <input type="text" class="form-control" id="StaffID" name="StaffID" value="" required="required">

      </div>
    </div>

        <div class="form-group">
      <label for="Subject" class="col-lg-3 control-label">Subject</label>
      <div class="col-sm-9">
        <select class="form-control input-lg" id="Subject" name="Subject">
          <?php foreach (getAllSubjects()as $subject) {
          
           echo "<option value=".$subject['SubjectID'].">";
           echo $subject['SubjectName'];
           echo "</option>";
          } ?>

           
        </select>
      </div>
    </div>

      <div class="form-group">
      <label for="Class" class="col-lg-3 control-label">Form</label>
      <div class="col-sm-9">
        <select class="form-control input-lg" id="Form" name="Form">
            <option value="1">Form 1</option>
            <option value="2">Form 2</option>
            <option value="3">Form 3</option>
            <option value="4">Form 4</option>
            <option value="5">Form 5</option>
            <option value="6">Form 6</option>
        </select>
      </div>
    </div>

          <div class="form-group">
      <label for="Class" class="col-lg-3 control-label">Class</label>
      <div class="col-sm-9">
        <select class="form-control input-lg" id="Class" name="Class">
          <?php foreach (getAllClasses()as $class) {
          
           echo "<option value=".$class['ClassID'].">";
           echo $class['Class'];
           echo "</option>";
          } ?>
        </select>
      </div>
    </div>

     
       <button type="submit" class="btn" id="modalSave">Save</button>
        <button type="button" class="btn" id="modalCancel" data-dismiss="modal">Cancel</button>     
     