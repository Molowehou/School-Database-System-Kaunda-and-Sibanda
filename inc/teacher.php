    <tr>
      <td>
          <a class="bt btn-sm btn-success"  id="editbtn" href="/MuzindaSchoolDatabase3/viewTeacher.php?staffID=<?php echo $teacher['employeeStaffID']; ?>">View</a>
          <a class="bt btn-sm btn-warning" id="deletebtn" href="/MuzindaSchoolDatabase3/procedures/adjustStatus.php?Status=Deactivate&staffID=<?php echo $teacher['employeeStaffID']; ?>&name=<?php echo $teacher['employeeFirstName']; ?>">DELETE</a>
                   
      </td>
       <td><?php echo $teacher['employeeStaffID']; ?></td>
       <td><?php echo $teacher['employeeFirstName']; ?></td>
       <td><?php echo $teacher['employeeMiddleName']; ?></td>
       <td><?php echo $teacher['employeeLastName']; ?></td>
    </tr>
        