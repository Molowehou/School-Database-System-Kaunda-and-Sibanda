
 

    <tr>
      <td>
          <a class="bt btn-sm btn-success"  id="editbtn" href="/MuzindaSchoolDatabase3/editStudent.php?studentID=<?php echo $student['studentID']; ?>">EDIT</a>
          <a class="bt btn-sm btn-warning" id="deletebtn"  href="/MuzindaSchoolDatabase3/editStudent.php?studentID=<?php echo $student['studentID']; ?>">DELETE</a>
          
         
                   
      </td>
       <td><?php echo $student['studentID']; ?></td>
       <td><?php echo $student['studentFirstName']; ?></td>
       <td><?php echo $student['studentMiddleName']; ?></td>
       <td><?php echo $student['studentLastName']; ?></td>
       <td><?php echo $student['studentForm_ID']; ?></td> 
       <td><?php echo $student['studentClass_ID']; ?></td>
    </tr>
        
