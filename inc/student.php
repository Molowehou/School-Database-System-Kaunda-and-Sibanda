
 

    <tr>
      <td>
          <a class="bt btn-sm btn-success"  id="editbtn" href="/MuzindaSchoolDatabase3/viewStudent.php?studentID=<?php echo $student['studentID']; ?>">VIEW</a>
          <a class="bt btn-sm btn-warning" id="deletebtn"  href="/MuzindaSchoolDatabase3/procedures/adjustStudentStatus.php?Status=Deactivate&studentID=<?php echo $student['studentID']; ?>&name=<?php echo $student['studentFirstName']; ?>">DELETE</a>
          
         
                   
      </td>
       <td><?php echo $student['studentID']; ?></td>
       <td><?php echo $student['studentFirstName']; ?></td>
       <td><?php echo $student['studentMiddleName']; ?></td>
       <td><?php echo $student['studentLastName']; ?></td>
       <td><?php echo $student['Form']; ?></td> 
       <td><?php echo $student['Class']; ?></td>
    </tr>
        
