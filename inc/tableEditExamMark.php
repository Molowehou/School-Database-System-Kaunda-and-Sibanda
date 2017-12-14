


    <tr>
 
      <td>
          <?php echo $exam['studentID']; ?>
      </td>

       <td>
           <?php echo $exam['studentFirstName']; ?>
      </td>


       <td>
          <?php echo $exam['studentLastName']; ?>
      </td>

       <td>
        <input type="text" class="form-control" id="examMark<?php echo $i  ?>" name="examMark<?php echo $i  ?>" value="<?php echo $exam['Mark'] ?>" >
      </td>

       <td>
        <input type="text" class="form-control" id="examComment<?php echo $i  ?>" name="examComment<?php echo $i  ?>"
         value="<?php echo $exam['Comment']; ?>">
      </td>

       
      
     
    
    </tr>



  
        
