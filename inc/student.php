
 

    <tr>
      <td>
          <a class="btn" id="editbtn" href="/MuzindaSchoolDatabase3/editStudent.php?studentID=<?php echo $student['studentID']; ?>">EDIT</a>
          <a class="btn" id="deletebtn"  href="/MuzindaSchoolDatabase3/editStudent.php?studentID=<?php echo $student['studentID']; ?>">DELETE</a>
          
         
                   
      </td>
       <td><?php echo $student['studentID']; ?></td>
       <td><?php echo $student['studentFirstName']; ?></td>
       <td><?php echo $student['studentMiddleName']; ?></td>
       <td><?php echo $student['studentLastName']; ?></td>
       <td><?php echo $student['studentForm_ID']; ?></td> 
       <td><?php echo $student['studentClass_ID']; ?></td>
    </tr>
        
