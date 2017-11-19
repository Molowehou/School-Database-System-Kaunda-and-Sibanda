    <tr>
      <td>
          <a class="bt btn-sm btn-success"  id="editbtn" href="/MuzindaSchoolDatabase3/editTeacher.php?staffID=<?php echo $teacher['employeeStaffID']; ?>">EDIT</a>
          <a class="bt btn-sm btn-warning" id="deletebtn" href="/MuzindaSchoolDatabase3/editTeacher.php?staffID=<?php echo $teacher['employeeStaffID']; ?>">DELETE</a>
                   
      </td>
       <td><?php echo $teacher['employeeStaffID']; ?></td>
       <td><?php echo $teacher['employeeFirstName']; ?></td>
       <td><?php echo $teacher['employeeMiddleName']; ?></td>
       <td><?php echo $teacher['employeeLastName']; ?></td>
    </tr>
        