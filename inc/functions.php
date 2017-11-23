<?php 

/**
 * @return \Symfony\Component\HttpFoundation\Request
 */
function request() {
    return \Symfony\Component\HttpFoundation\Request::createFromGlobals();
}



require_once __DIR__. '/bootstrap.php';


//======================Autogenerator for Student ID and Staff ID =================================


function getLastStaffID(){
    global $db; 
    try{ 

    $query = "SELECT TOP 1 employeeStaffID FROM tblTeacherDetails ORDER BY ID DESC";

        $stmt= $db->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(\Exception $e) {
        throw $e;
    }
}

function generateNewStaffID(){
    global $db; 
    try{ 

    foreach (getLastStaffID() as $LastStaffID) {
        $splitID=substr($LastStaffID,3,strlen($LastStaffID)-5)+1;
        $NewStaffID="STA".str_pad($splitID, 2, '0', STR_PAD_LEFT).date('y');
    }
        return $NewStaffID;
    } catch(\Exception $e) {
        throw $e;
    }
}


function getLastStudentID(){
    global $db; 
    try{ 
   
    $query = "SELECT TOP 1 studentID FROM tblStudentDetails ORDER BY ID DESC";

        $stmt= $db->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(\Exception $e) {
        throw $e;
    }
}

function generateNewStudentID(){
    global $db; 
    try{ 

    foreach (getLastStudentID() as $LastStudentID) {
        $splitID=substr($LastStudentID,3,strlen($LastStudentID)-5)+1;
        $NewStudentID="STU".str_pad($splitID, 2, '0', STR_PAD_LEFT).date('y');
    }
        return $NewStudentID;
    } catch(\Exception $e) {
        throw $e;
    }
}


//======================Functions for Adding Items into the Database ===================================


function addTeacher($StaffID,$firstName,$middleName,$lastName,$Gender,
         $DateOfBirth,$NationalID,$EducationalQualifications,
         $formerSchool,$CellPhone,$Telephone,$Email,$HomeAddress,
         $ShortDescription,$Title,$firstName1,$middleName1,$lastName1,
         $NationalID1,$RelationshipToTeacher1,$HomeAddress1,$Occupation1,
         $EmployerName1,$BusinessPhone1,$CellPhone1,$Email1){
    
    global $db;
    $role_ID=2;
    $Status=1;
    
    try {
        $query = "INSERT INTO tblTeacherDetails(
         [employeeStaffID],[employeeFirstName],
         [employeeMiddleName],[employeeLastName],[employeeGender_ID],[employeeDOB],
         [employeeNationalID],[employeeEducationalQualifications],[employeeFormerSchool],
         [employeeCellphone],[employeeTelephone],[employeeEmail],[employeeHomeAddress],
         [employeeShortDescription],[nokTitle_ID],[nokFirstName],[nokMiddleName],
         [nokLastName],[nokNationalID],[nokRelationshipToTeacher],[nokHomeAddress],
         [nokOccupation],[nokEmployerName],[nokBusinessPhone],[nokCellphone],[nokEmail],[EmployeeRole_ID],[Status])

       VALUES (:StaffID,:firstName,:middleName,:lastName,:Gender,:DateOfBirth,
               :NationalID,:EducationalQualifications,:formerSchool,:CellPhone,:Telephone,
               :Email,:HomeAddress,:ShortDescription,:Title,:firstName1,:middleName1,:lastName1,
                :NationalID1,:RelationshipToTeacher1,:HomeAddress1,:Occupation1,:EmployerName1,
                :BusinessPhone1,:CellPhone1,:Email1,:role_ID,
                :Status)";

        $stmt = $db->prepare($query);
        $stmt->bindParam(':StaffID',$StaffID);
        $stmt->bindParam(':firstName',$firstName);
        $stmt->bindParam(':middleName',$middleName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':Gender',$Gender);
        $stmt->bindParam(':DateOfBirth',$DateOfBirth);
        $stmt->bindParam(':NationalID',$NationalID);
        $stmt->bindParam(':EducationalQualifications', $EducationalQualifications);
        $stmt->bindParam(':formerSchool', $formerSchool);
        $stmt->bindParam(':CellPhone', $CellPhone);
        $stmt->bindParam(':Telephone',$Telephone);
        $stmt->bindParam(':Email',$Email);
        $stmt->bindParam(':HomeAddress', $HomeAddress);
        $stmt->bindParam(':ShortDescription',$ShortDescription);
        $stmt->bindParam(':Title',$Title);
        $stmt->bindParam(':firstName1',$firstName1);
        $stmt->bindParam(':middleName1', $middleName1);
        $stmt->bindParam(':lastName1', $lastName1);
        $stmt->bindParam(':NationalID1',$NationalID1);
        $stmt->bindParam(':RelationshipToTeacher1',$RelationshipToTeacher1);
        $stmt->bindParam(':HomeAddress1',$HomeAddress1);
        $stmt->bindParam(':Occupation1', $Occupation1);
        $stmt->bindParam(':EmployerName1', $EmployerName1);
        $stmt->bindParam(':BusinessPhone1', $BusinessPhone1);
        $stmt->bindParam(':CellPhone1',$CellPhone1);
        $stmt->bindParam(':Email1',$Email1);
        $stmt->bindParam(':role_ID', $role_ID);
        $stmt->bindParam(':Status', $Status);
        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}


function addStudent (
    $studentID,$firstName,$middleName,$lastName,$gender,$dateOfBirth,$birthEntryNo,$NationalID,$formerSchool,
    $specialNeed,$homeAddress,$form,$class,$guardianTitle,$guardianFirstName,$guardianMiddleName,$guardianlastName,
   $guardianNationalID,$guardianRelationshipToStudent,$guardianHomeAddress,$guardianOccupation,$guardianEmployerName,
    $guardianBusinessPhone,$guardianCellPhone,$guardianTelephone,$guardianEmail) {
    
    global $db;
    $role_ID=3;
    $Status=1;
    
    try {
        $query = "INSERT INTO tblStudentDetails(
                        [studentID],[studentFirstName],[studentMiddleName],
                        [studentLastName],[studentGender_ID],[studentDateOfBirth],[studentbirthEntryNumber],
                        [studentNationalID],[studentFormerSchool],[studentSpecialNeed],[studentHomeAddress],
                        [studentClass_ID],[studentForm_ID],[gdTitle_ID],[gdFirstName],[gdMiddleName],[gdLastName],
                        [gdNationalID],[gdRelationshipToStudent],[gdHomeAddress],[gdOccupation],[gdEmployerName],
                        [gdBusinessPhone],[gdCellphone],[gdTelePhone],[gdEmail],[StudentRole_ID],[Status])

             VALUES (
                :studentID,:firstName,:middleName,
                :lastName,:gender,:dateOfBirth,:birthEntryNo,
                :NationalID,:formerSchool,:specialNeed,:homeAddress,
                :class,:form,:guardianTitle,:guardianFirstName,:guardianMiddleName,:guardianlastName,
                :guardianNationalID,:guardianRelationshipToStudent,:guardianHomeAddress,:guardianOccupation,:guardianEmployerName,
                :guardianBusinessPhone,:guardianCellPhone,:guardianTelephone,:guardianEmail,:role_ID,:Status)";

        $stmt = $db->prepare($query);
        $stmt->bindParam(':studentID',trim($studentID));
        $stmt->bindParam(':firstName',$firstName);
        $stmt->bindParam(':middleName',$middleName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':gender',$gender);
        $stmt->bindParam(':dateOfBirth',$dateOfBirth);
        $stmt->bindParam(':birthEntryNo',$birthEntryNo);
        $stmt->bindParam(':NationalID', $NationalID);
        $stmt->bindParam(':formerSchool', $formerSchool);
        $stmt->bindParam(':specialNeed', $specialNeed);
        $stmt->bindParam(':homeAddress',$homeAddress);
        $stmt->bindParam(':form',$form);
        $stmt->bindParam(':class', $class);
        $stmt->bindParam(':guardianTitle', $guardianTitle);
        $stmt->bindParam(':guardianFirstName', $guardianFirstName);
        $stmt->bindParam(':guardianMiddleName',$guardianMiddleName);
        $stmt->bindParam(':guardianlastName',$guardianlastName);
        $stmt->bindParam(':guardianNationalID', $guardianNationalID);
        $stmt->bindParam(':guardianRelationshipToStudent', $guardianRelationshipToStudent);
        $stmt->bindParam(':guardianHomeAddress', $guardianHomeAddress);
        $stmt->bindParam(':guardianOccupation',$guardianOccupation);
        $stmt->bindParam(':guardianEmployerName',$guardianEmployerName);
        $stmt->bindParam(':guardianBusinessPhone', $guardianBusinessPhone);
        $stmt->bindParam(':guardianCellPhone', $guardianCellPhone);
        $stmt->bindParam(':guardianTelephone',$guardianTelephone);
        $stmt->bindParam(':guardianEmail', $guardianEmail);
        $stmt->bindParam(':role_ID', $role_ID);
        $stmt->bindParam(':Status', $Status);
        
        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}




function addTeacherSubject($StaffID,$SubjectID,$FormID,$ClassID) {
    global $db;
    
    try {
        $query = "INSERT INTO tblTeachers_Subjects(Staff_ID, Subject_ID,Form_ID,Class_ID)
             VALUES (:StaffID,:SubjectID,:FormID,:ClassID)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':StaffID',$StaffID);
        $stmt->bindParam(':SubjectID',$SubjectID);
        $stmt->bindParam(':FormID', $FormID);
        $stmt->bindParam(':ClassID', $ClassID);
        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}



//======================Functions for retrieving information from the Database ===================================


function getAllExercises(){
    global $db; 
    try{ 
        
    $query = "SELECT  *,[studentID] ,[studentFirstName],[studentLastName] FROM  tblExercises 
             LEFT OUTER JOIN tblStudentDetails
             ON tblExercises .[student_ID]=tblStudentDetails.[studentID]";

        $stmt= $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(\Exception $e) {
        throw $e;
    }
}




function getAllStudents(){
    global $db; 
    try{ 
        
    $query = "SELECT *,Class,Form
             FROM  tblStudentDetails
             LEFT OUTER JOIN tblForm
             ON tblStudentDetails .[studentForm_ID]=tblForm.[FormID]
             LEFT OUTER JOIN tblClass
             ON tblStudentDetails .[studentClass_ID]=tblClass.[ClassID] 
             WHERE Status=1             
             ORDER BY [studentForm_ID],[studentClass_ID] ASC";

        $stmt= $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(\Exception $e) {
        throw $e;
    }
}


function getAllTeachers(){
    global $db; 
    try{ 
        
    $query = "SELECT *
    FROM  tblTeacherDetails
    WHERE Status=1
    ORDER BY employeeStaffID DESC";

        $stmt= $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(\Exception $e) {
        throw $e;
    }
}



function getAllSubjects(){
    global $db; 
    try{ 
        
    $query = "SELECT *
    FROM  tblSubjects  ORDER BY SubjectName ASC";

        $stmt= $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(\Exception $e) {
        throw $e;
    }
}


function getAllClasses(){
    global $db; 
    try{ 
        
    $query = "SELECT *
    FROM  tblClass  ORDER BY Class ASC";

        $stmt= $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(\Exception $e) {
        throw $e;
    }
}




//======================Functions for updating information from the Database ===================================


function updateStudent(
        $studentID,$firstName,$middleName,$lastName,$gender,$dateOfBirth,
        $birthEntryNo,$NationalID,$formerSchool,$specialNeed,$homeAddress,
        $form,$class,$guardianTitle,$guardianFirstName,$guardianMiddleName,
        $guardianlastName,$guardianNationalID,$guardianRelationshipToStudent,
        $guardianHomeAddress,$guardianOccupation,$guardianEmployerName,
        $guardianBusinessPhone,$guardianCellPhone,$guardianTelephone,$guardianEmail) {
    
    global $db;
    
    
    try {
        $query = "UPDATE tblStudentDetails 
                         SET [studentFirstName]=:firstName,
                             [studentMiddleName]=:middleName,
                             [studentLastName]=:lastName,
                             [studentGender_ID]=:gender,
                             [studentDateOfBirth]=:dateOfBirth,
                             [studentbirthEntryNumber]=:birthEntryNo,
                             [studentNationalID]=:NationalID,
                             [studentFormerSchool]=:formerSchool,
                             [studentSpecialNeed]=:specialNeed,
                             [studentHomeAddress]=:homeAddress,
                             [studentClass_ID]=:class,
                             [studentForm_ID]=:form, 
                             [gdTitle_ID]=:guardianTitle,
                             [gdFirstName]=:guardianFirstName,
                             [gdMiddleName]=:guardianMiddleName,
                             [gdLastName]=:guardianlastName,
                             [gdNationalID]=:guardianNationalID,
                             [gdRelationshipToStudent]=:guardianRelationshipToStudent,
                             [gdHomeAddress]=:guardianHomeAddress,
                             [gdOccupation]=:guardianOccupation,
                             [gdEmployerName]=:guardianEmployerName,
                             [gdBusinessPhone]=:guardianBusinessPhone,
                             [gdCellphone]=:guardianCellPhone,
                             [gdTelePhone]=:guardianTelephone,
                             [gdEmail]=:guardianEmail
                WHERE   [studentID]=:studentID";


        $stmt = $db->prepare($query);
        $stmt->bindParam(':studentID', trim($studentID));
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':middleName', $middleName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':gender',$gender);
        $stmt->bindParam(':dateOfBirth',$dateOfBirth);
        $stmt->bindParam(':birthEntryNo',$birthEntryNo);
        $stmt->bindParam(':NationalID', $NationalID);
        $stmt->bindParam(':formerSchool', $formerSchool);
        $stmt->bindParam(':specialNeed', $specialNeed);
        $stmt->bindParam(':homeAddress',$homeAddress);
        $stmt->bindParam(':class', $class);
        $stmt->bindParam(':form', $form);      
        $stmt->bindParam(':guardianTitle', $guardianTitle);
        $stmt->bindParam(':guardianFirstName', $guardianFirstName);
        $stmt->bindParam(':guardianMiddleName',$guardianMiddleName);
        $stmt->bindParam(':guardianlastName',$guardianlastName);
        $stmt->bindParam(':guardianNationalID', $guardianNationalID);
        $stmt->bindParam(':guardianRelationshipToStudent', $guardianRelationshipToStudent);
        $stmt->bindParam(':guardianHomeAddress', $guardianHomeAddress);
        $stmt->bindParam(':guardianOccupation',$guardianOccupation);
        $stmt->bindParam(':guardianEmployerName',$guardianEmployerName);
        $stmt->bindParam(':guardianBusinessPhone', $guardianBusinessPhone);
        $stmt->bindParam(':guardianCellPhone', $guardianCellPhone);
        $stmt->bindParam(':guardianTelephone',$guardianTelephone);
        $stmt->bindParam(':guardianEmail', $guardianEmail);
        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}



function editTeacher($StaffID,$firstName,$middleName,$lastName,$Gender,
         $DateOfBirth,$NationalID,$EducationalQualifications,
         $formerSchool,$CellPhone,$Telephone,$Email,$HomeAddress,
         $ShortDescription,$Title,$firstName1,$middleName1,$lastName1,
         $NationalID1,$RelationshipToTeacher1,$HomeAddress1,$Occupation1,
         $EmployerName1,$BusinessPhone1,$CellPhone1,$Email1){
    
    global $db;
    
    try {
        $query = "UPDATE tblTeacherDetails
                    SET  [employeeFirstName]=:firstName,
                         [employeeMiddleName]=:middleName,
                         [employeeLastName]=:lastName,
                         [employeeGender_ID]=:Gender,
                         [employeeDOB]=:DateOfBirth,
                         [employeeNationalID]=:NationalID,
                         [employeeEducationalQualifications]=:EducationalQualifications,
                         [employeeFormerSchool]=:formerSchool,
                         [employeeCellphone]=:CellPhone,
                         [employeeTelephone]=:Telephone,
                         [employeeEmail]=:Email,
                         [employeeHomeAddress]=:HomeAddress,
                         [employeeShortDescription]=:ShortDescription,
                         [nokTitle_ID]=:Title,
                         [nokFirstName]=:firstName1,
                         [nokMiddleName]=:middleName1,
                         [nokLastName]=:lastName1,
                         [nokNationalID]=:NationalID1,
                         [nokRelationshipToTeacher]=:RelationshipToTeacher1,
                         [nokHomeAddress]=:HomeAddress1,
                         [nokOccupation]=:Occupation1,
                         [nokEmployerName]=:EmployerName1,
                         [nokBusinessPhone]=:BusinessPhone1,
                         [nokCellphone]=:CellPhone1,
                         [nokEmail]=:Email1
               WHERE   [employeeStaffID]=:StaffID";

        $stmt = $db->prepare($query);
        $stmt->bindParam(':StaffID',trim($StaffID));
        $stmt->bindParam(':firstName',$firstName);
        $stmt->bindParam(':middleName',$middleName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':Gender',$Gender);
        $stmt->bindParam(':DateOfBirth',$DateOfBirth);
        $stmt->bindParam(':NationalID',$NationalID);
        $stmt->bindParam(':EducationalQualifications', $EducationalQualifications);
        $stmt->bindParam(':formerSchool', $formerSchool);
        $stmt->bindParam(':CellPhone', $CellPhone);
        $stmt->bindParam(':Telephone',$Telephone);
        $stmt->bindParam(':Email',$Email);
        $stmt->bindParam(':HomeAddress', $HomeAddress);
        $stmt->bindParam(':ShortDescription',$ShortDescription);
        $stmt->bindParam(':Title',$Title);
        $stmt->bindParam(':firstName1',$firstName1);
        $stmt->bindParam(':middleName1', $middleName1);
        $stmt->bindParam(':lastName1', $lastName1);
        $stmt->bindParam(':NationalID1',$NationalID1);
        $stmt->bindParam(':RelationshipToTeacher1',$RelationshipToTeacher1);
        $stmt->bindParam(':HomeAddress1',$HomeAddress1);
        $stmt->bindParam(':Occupation1', $Occupation1);
        $stmt->bindParam(':EmployerName1', $EmployerName1);
        $stmt->bindParam(':BusinessPhone1', $BusinessPhone1);
        $stmt->bindParam(':CellPhone1',$CellPhone1);
        $stmt->bindParam(':Email1',$Email1);
        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}




function getStudent($studentID){
    global $db;

    try{ 
        $query = "SELECT * FROM tblStudentDetails WHERE studentID=?";
        $stmt= $db->prepare($query);
        $stmt->bindparam(1,$studentID);
        $stmt->execute(); 
     return $stmt->fetch(PDO::FETCH_ASSOC);
     
    } catch(\Exception $e) {
        throw $e;
    }
}

function getSubjectByID($subjectID){
    global $db;

    try{ 
        $query = "SELECT * FROM tblSubjects WHERE SubjectID=?";
        $stmt= $db->prepare($query);
        $stmt->bindparam(1,$subjectID);
        $stmt->execute(); 
     return $stmt->fetch(PDO::FETCH_ASSOC);
     
    } catch(\Exception $e) {
        throw $e;
    }
}




function getTeacher($StaffID){
    global $db;

    try{ 
        $query = "SELECT * FROM tblTeacherDetails WHERE employeeStaffID=?";
        $stmt= $db->prepare($query);
        $stmt->bindparam(1, $StaffID);
        $stmt->execute(); 
     return $stmt->fetch(PDO::FETCH_ASSOC);
     
    } catch(\Exception $e) {
        throw $e;
    }
}



function getClassByID($form_ID,$class_ID){
    global $db;

    try{ 
        $query = "SELECT *,[Form],[Class]
        FROM tblStudentDetails
        LEFT OUTER JOIN tblForm
        ON tblStudentDetails .[studentForm_ID]=tblForm.[FormID]
        LEFT OUTER JOIN tblClass
     ON tblStudentDetails .[studentClass_ID]=tblClass.[ClassID]
        WHERE studentForm_ID = :form_ID
        AND studentClass_ID=:class_ID
        AND Status=1";
        $stmt= $db->prepare($query);
         $stmt->bindparam(':form_ID',$form_ID);
         $stmt->bindparam(':class_ID',$class_ID);
        $stmt->execute(); 
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
     
    } catch(\Exception $e) {
        throw $e;
    }
}



function getStudentExerciseByID($ExerciseID){
    global $db;

    try{ 
        $query = "SELECT * 
              FROM tblExercises
              WHERE ExerciseID=:ExerciseID";
        $stmt= $db->prepare($query);
        $stmt->bindparam(':ExerciseID',$ExerciseID);
        $stmt->execute(); 
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
     
    } catch(\Exception $e) {
        throw $e;
    }
}


































function addBook($title, $description) {
    global $db;
    $ownerId = 1;  

    try {
        $query = "INSERT INTO tblbooks (Name, BookDescription, owner_ID,created_at) VALUES (:name, :description, :ownerId,GETDATE())";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':name', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':ownerId', $ownerId);
        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}



function getAllBooks(){
    global $db; 
    try{ 
        //$query = "SELECT * FROM tblbooks";
    $query = "SELECT tblBooks.*, sum(tblvotes.[value]) as score
    FROM tblbooks
    Left JOIN tblVotes ON (tblbooks.[id] = tblVotes.[book_id])
    GROUP BY tblBooks.[id],tblBooks.[Name],tblBooks.[BookDescription],tblBooks.[owner_ID],tblBooks.[created_at]
    ORDER BY score DESC";

        $stmt= $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(\Exception $e) {
        throw $e;
    }
}

/*
$query = "SELECT tblBooks.*, sum(tblvotes.value) as score"
 ."FROM tblbooks"
 ."Left JOIN tblvotes ON (tblbooks.id = tblVotes.book_id)"
 ."GROUP BY tblBooks.id,tblBooks.Name,tblBooks.BookDescription,tblBooks.owner_ID,tblBooks.created_at"
 ."ORDER BY score DESC";
 */



function getbook($Id){
    global $db;

    try{ 
        $query = "SELECT * FROM tblbooks WHERE id= ?";
        $stmt= $db->prepare($query);
        $stmt->bindparam(1, $Id);
        $stmt->execute(); 
     return $stmt->fetch(PDO::FETCH_ASSOC);
     
    } catch(\Exception $e) {
        throw $e;
    }
}


function updateBook($bookId,$title, $description) {
    global $db;
    try {
        $query = "UPDATE tblbooks SET Name=:name, BookDescription=:description WHERE id=:bookId";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':name', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':bookId', $bookId);
        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}

function deleteBook($bookId) {
    global $db;
    try {
        $query = "DELETE FROM tblbooks WHERE id=:bookId";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':bookId', $bookId);
        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}


function vote($bookId, $score) {
    global $db;
    $personId = 0;
    
    try {
        $query = 'INSERT INTO tblVotes (book_id, Person_id, Value) VALUES (:bookId, :person_id, :score)';
        $stmt = $db->prepare($query);
        $stmt->bindParam(':bookId', $bookId);
        $stmt->bindParam(':person_id', $personId);
        $stmt->bindParam(':score', $score);
        $stmt->execute();
    } catch (\Exception $e) {
        die('Something happened with voting. Please try again');
    }
}
 


function redirect($path, $extra = []){
      $response = \Symfony\Component\HttpFoundation\Response::create(null,\symfony\Component\HttpFoundation\Response::HTTP_FOUND, ['Location'=>'/MuzindaSchoolDatabase3/'.$path]);
      if(key_exists('cookies',$extra)) {
       foreach ($extra['cookies'] as $cookie) {
          $response->headers->setcookie($cookie);  
        }
      }
      $response->send();
}


function getAllUsers() {
    global $db;
    
    try {
    $query = "SELECT  [employeeStaffID],[employeeFirstName],[employeeLastName],created_at,[role_ID],tblUsers.[id]
                 FROM tblTeacherDetails
                 INNER JOIN tblUsers 
                 ON tblTeacherDetails.[employeeStaffID]=tblUsers.[StaffID]
                 WHERE tblTeacherDetails.[Status]=1";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}




function deleteTeacherClass($ExerciseID){
    global $db;
    try {
        $query = "DELETE FROM tblTeachers_Subjects WHERE ID=:ExerciseID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':ExerciseID', $ExerciseID);
        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}







function getAllTeacherSubjects($user) {
    global $db;
    
    try {
        $query = "SELECT  [employeeStaffID],[employeeFirstName],
                 [employeeLastName],[Form_ID],[Subject_ID],[Class_ID],
                 [SubjectName],[Form],[Class]
                 FROM tblTeacherDetails
                 
                 LEFT JOIN tblTeachers_Subjects 
                 ON tblTeacherDetails.[employeeStaffID]=tblTeachers_Subjects.[Staff_ID]
                 
                 LEFT JOIN tblSubjects 
                 ON tblTeachers_Subjects .[Subject_ID]=tblSubjects.[SubjectID]
                 
                 INNER JOIN tblForm
                 ON tblTeachers_Subjects .[Form_ID]=tblForm.[FormID]

                 LEFT JOIN tblClass
                 ON tblTeachers_Subjects .[Class_ID]=tblClass.[ClassID]

                 WHERE tblTeachers_Subjects.[Staff_ID]=:user
                
                 ORDER BY [Form] ASC";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':user',$user);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}


function getAllTeachersBySubjects() {
    global $db;
    
    try {
        $query = "SELECT tblTeachers_Subjects.[ID], [employeeStaffID],[employeeFirstName],
                 [employeeLastName],[Form_ID],[Subject_ID],[Class_ID],
                 [SubjectName],[Form],[Class]
                 FROM tblTeacherDetails
                 INNER JOIN tblTeachers_Subjects 
                 ON tblTeacherDetails.[employeeStaffID]=tblTeachers_Subjects.[Staff_ID]
                 INNER JOIN tblSubjects 
                 ON tblTeachers_Subjects .[Subject_ID]=tblSubjects.[SubjectID]

                 INNER JOIN tblForm
                 ON tblTeachers_Subjects .[Form_ID]=tblForm.[FormID]

                 INNER JOIN tblClass
                 ON tblTeachers_Subjects .[Class_ID]=tblClass.[ClassID]

                 ORDER BY [employeeStaffID] ASC";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}






function getExercisesBySubject($Subject_ID,$class_ID) {
    global $db;
    
    try {
        $query = "SELECT  *,
                 [SubjectName],[Form]
                 FROM tblExercises
                 INNER JOIN tblSubjects
                 ON tblExercises.[Subject_ID]=tblSubjects.[SubjectID]
                 INNER JOIN tblForm 
                 ON tblSubjects.[SubjectID]=tblExercises.[subject_ID]
                 WHERE tblExercises.[Subject_ID]=:Subject_ID
                 AND tblExercises.[class_ID]=:class_ID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':Subject_ID',$Subject_ID);
        $stmt->bindParam(':class_ID',$class_ID);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}


function getExerciseByID($form,$class,$subject) {
    global $db;
    
    try {
        $query = "
       SELECT DISTINCT ExerciseID,Topic,[subTopic],[Title],[ExcerciseDate]
       FROM tblExercises
       WHERE tblExercises.[class_ID]=:class
       AND tblExercises.[subject_ID]=:subject
       AND tblExercises.[form_ID]=:form
       ORDER BY ExerciseID,Topic,[subTopic],[Title],[ExcerciseDate];"; 

        $stmt = $db->prepare($query);
        $stmt->bindParam(':form',$form);
        $stmt->bindParam(':class',$class);
        $stmt->bindParam(':subject',$subject);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}



function getDistinctClass() {
    global $db;
    
    try {
        $query = "
       SELECT DISTINCT [Form],[Class],studentClass_ID,studentForm_ID,tblForm.[FormID],tblClass.[ClassID]
       FROM tblForm
       LEFT JOIN tblStudentDetails
       ON tblForm.[FormID]=tblStudentDetails.[studentForm_ID]
       LEFT JOIN tblClass
       ON tblStudentDetails.[studentClass_ID]=tblClass.[ClassID]
       ORDER BY tblForm.[Form],tblClass.[Class]"; 

        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}










function getExerciseByExerciseID($ExerciseID) {
    global $db;
    
    try {
        $query = "SELECT *,[studentID],[studentFirstName],[studentLastName]
                  FROM tblExercises
                  RIGHT JOIN tblStudentDetails 
                  ON tblExercises.[student_ID]=tblStudentDetails.[studentID]
                  WHERE tblExercises.[ExerciseID]=:ExerciseID;"; 
        $stmt = $db->prepare($query);
        $stmt->bindParam(':ExerciseID',$ExerciseID);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (\Exception $e) {
        throw $e;
    }
}









function findUserByStaffID($StaffID) {
    global $db;
    
    try {
        $query = "SELECT * 
         FROM tblusers
         INNER JOIN tblTeacherDetails
         ON tblusers.[StaffID]=tblTeacherDetails.[employeeStaffID]
         WHERE StaffID = :StaffID
         ";

        $stmt = $db->prepare($query);
        $stmt->bindParam(':StaffID', $StaffID);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}

function findTeacherByStaffID($StaffID) {
    global $db;
    
    try {
        $query = "SELECT * FROM tblTeacherDetails WHERE employeeStaffID = :StaffID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':StaffID', $StaffID);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}

function findStudentByStudentID($studentID) {
    global $db;
    
    try {
        $query = "SELECT * FROM tblStudentDetails WHERE studentID = :studentID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':studentID', $studentID);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}



function findExerciseByID($NewExerciseID) {
    global $db;
    
    try {
        $query = "SELECT *,studentFirstName,studentLastName 
        FROM tblExercises 
        LEFT JOIN tblStudentDetails
        ON tblExercises.[student_ID]=tblStudentDetails.[studentID]
        WHERE tblExercises.[ExerciseID] =:ExerciseID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':ExerciseID', $NewExerciseID);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}


function findExerciseInfoByID($NewExerciseID) {
    global $db;
    
    try {
        $query = "SELECT *,studentFirstName,studentLastName 
        FROM tblExercises 
        LEFT JOIN tblStudentDetails
        ON tblExercises.[student_ID]=tblStudentDetails.[studentID]
        WHERE tblExercises.[ExerciseID] =:ExerciseID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':ExerciseID', $NewExerciseID);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}




function getLastExerciseID(){
    global $db; 
    try{ 

    $query = "SELECT TOP 1 ExerciseID FROM tblExercises ORDER BY ExerciseID DESC";

        $stmt= $db->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(\Exception $e) {
        throw $e;
    }
}

function generateNewExerciseID(){
    global $db; 
    try{ 

    foreach (getLastExerciseID() as $LastExerciseID) {
        $NewExerciseID=$LastExerciseID+1;
    }
        return $NewExerciseID;
    } catch(\Exception $e) {
        throw $e;
    }
}

function findLastExerciseID(){
    global $db; 
    try{ 

    foreach (getLastExerciseID() as $LastExerciseID) {
        $LastExerciseID=$LastExerciseID;
    }
        return $LastExerciseID;
    } catch(\Exception $e) {
        throw $e;
    }
}


function addNewExercise($NewExerciseID,$subject_ID,$form_ID,$class_ID,$student_ID,$staff_ID,$Topic,$SubTopic,$Title,$HighestPossibleMark,$exerciseMark,$exerciseComment) {

    global $db; 
    try {
        $query = "INSERT INTO tblExercises (
       [ExerciseID],[subject_ID],[form_ID],
       [class_ID],[student_ID],
       [staff_ID],[Topic],[subTopic],[Title],
       [HighestPossibleMark],[Mark],[Comment],[ExcerciseDate])

         VALUES   (:NewExerciseID,:subject_ID,:form_ID,:class_ID,
            :student_ID,:staff_ID,:Topic,:SubTopic,
            :Title,:HighestPossibleMark,:Mark,
            :Comment,GETDATE())";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':NewExerciseID', $NewExerciseID);
    $stmt->bindParam(':subject_ID', $subject_ID);
    $stmt->bindParam(':form_ID', $form_ID);
    $stmt->bindParam(':class_ID', $class_ID);
    $stmt->bindParam(':student_ID',$student_ID);
    $stmt->bindParam(':staff_ID', $staff_ID);
    $stmt->bindParam(':Topic', $Topic);
    $stmt->bindParam(':SubTopic', $SubTopic);
    $stmt->bindParam(':Title', $Title);
    $stmt->bindParam(':HighestPossibleMark',$HighestPossibleMark);
    $stmt->bindParam(':Mark', $exerciseMark);
    $stmt->bindParam(':Comment', $exerciseComment);       
        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}

function addNewTempExercise($ExerciseID,$subject_ID,$form_ID,$class_ID,$student_ID,$staff_ID,$Topic,$SubTopic,$Title,$HighestPossibleMark,$exerciseMark,$exerciseComment) {

    global $db; 
    try {
        $query = "INSERT INTO [tblExerciseTempTable] (
       [ExerciseID],[subject_ID],[form_ID],
       [class_ID],[student_ID],
       [staff_ID],[Topic],[subTopic],[Title],
       [HighestPossibleMark],[Mark],[Comment],[ExcerciseDate])

         VALUES   (:ExerciseID,:subject_ID,:form_ID,:class_ID,
            :student_ID,:staff_ID,:Topic,:SubTopic,
            :Title,:HighestPossibleMark,:Mark,
            :Comment,GETDATE())";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':ExerciseID', $ExerciseID);
    $stmt->bindParam(':subject_ID', $subject_ID);
    $stmt->bindParam(':form_ID', $form_ID);
    $stmt->bindParam(':class_ID', $class_ID);
    $stmt->bindParam(':student_ID',$student_ID);
    $stmt->bindParam(':staff_ID', $staff_ID);
    $stmt->bindParam(':Topic', $Topic);
    $stmt->bindParam(':SubTopic', $SubTopic);
    $stmt->bindParam(':Title', $Title);
    $stmt->bindParam(':HighestPossibleMark',$HighestPossibleMark);
    $stmt->bindParam(':Mark', $exerciseMark);
    $stmt->bindParam(':Comment', $exerciseComment);       
        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}







function findUserByAccessToken() {
    global $db;
      try {
        $userId = decodeJwt('sub');  
    } catch (\Exception $e) {
        throw $e;     
    } 
    try {

$query = "SELECT [employeeStaffID],[employeeFirstName],[employeeLastName],[staffPhoto]
          FROM  tblTeacherDetails 
          JOIN tblUsers
          ON tblTeacherDetails.[employeeStaffID]=tblUsers.[StaffID]
          WHERE tblUsers.[id] = :userId";

        $stmt = $db->prepare($query);
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    } catch (\Exception $e) {
        throw $e;
    }
}



function createUser($StaffID, $password) {
    global $db;
    
    try {
        $query = "INSERT INTO tblUsers (StaffID, passwords, role_id) VALUES (:StaffID, :password, 2)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':StaffID', $StaffID);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return findUserByStaffID($StaffID);
    } catch (\Exception $e) {
        throw $e;
    }
}




function decodeJwt($prop = null){
     \Firebase\JWT\JWT::$leeway=1;
     $jwt = \Firebase\JWT\JWT::decode(request()->cookies->get('access_token'),
         getenv('SECRET_KEY'),
         ['HS256']
          );
     if($prop === null){
        return $jwt;
     }
     return $jwt->{$prop}; 
}


function isAuthenticated(){
if(!request()->cookies->has('access_token')){
    return false;
     }
      try {
       decodeJwt();
         return true;
    } catch (\Exception $e) {
       return false;
    }
}

function requireAuth(){

    if(!isAuthenticated()){

 $accessToken = new \Symfony\Component\HttpFoundation\Cookie('access_token',"expired",time()-9600,'/', getenv('COOKIE_DOMAIN'));
        redirect('login.php',['cookies'=>[$accessToken]]); 
    }

}

function requireAdmin(){
    global $session;
     if(!isAuthenticated()){

 $accessToken = new \Symfony\Component\HttpFoundation\Cookie('access_token',"expired",time()-9600,'/', getenv('COOKIE_DOMAIN'));
        redirect('login.php',['cookies'=>[$accessToken]]); 
    }
   try {
    if(!decodeJwt('is_admin')){
        $session->getFlashBag()->add('error', 'Not Authorized');
        redirect('index.php');
        }
    }catch(\Exception $e){
           $accessToken = new \Symfony\Component\HttpFoundation\Cookie('access_token',"expired",time()-9600,'/', getenv('COOKIE_DOMAIN'));
           redirect('login.php',['cookies'=>[$accessToken]]); 
                        }
    
}


function isAdmin(){
  if(!isAuthenticated()){
    return false;
  }

   try {
      $isAdmin = decodeJWT('is_admin');
    } catch (\Exception $e) {
       return false; 
    }
        return (boolean)$isAdmin;
}

function isOwner($ownerId){
  if(!isAuthenticated()){
    return false;
  }

   try {
      $userId = decodeJWT('sub');
    } catch (\Exception $e) {
       return false; 
    }
        return $ownerId==$userId;
}


function display_errors(){
    global $session;

    if(!$session->getFlashBag()->has('error')){
        return;
    }
    $messages =$session->getFlashBag()->get('error');
    $response ='<div  class="alert alert-danger alert-dismissable">';
     foreach ($messages as $message) {
         $response.="{$message}<br/>";
     }
            
    $response.='</div>';
    return $response;
}


function display_success() {
    global $session;
    if(!$session->getFlashBag()->has('success')) {
        return; }

    $messages = $session->getFlashBag()->get('success');

    $response = '<div class="alert alert-success alert-dismissable">';
    foreach ($messages as $message) {
        $response .= "{$message}<br>";
    }
    $response .= '</div>';

    return $response;
}


  
function updatePassword($password,$userId) {
    global $db;
    try {
        $query = "UPDATE tblUsers SET passwords=:password WHERE id=:userId ";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':userId', $userId);  
         $stmt->execute();
    } catch (\Exception $e) {
        return false;
    }
    return true;
}

function promote($userId) {
    global $db;
    try {
        $query = "UPDATE tblUsers SET role_ID =1 WHERE id=?";
        $stmt = $db->prepare($query);
        $stmt->bindParam(1, $userId);  
         $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}

function demote($userId) {
    global $db;
    try {
        $query = "UPDATE tblUsers SET role_ID =2 WHERE id=?";
        $stmt = $db->prepare($query);
        $stmt->bindParam(1, $userId);  
         $stmt->execute();
    } catch (\Exception $e) {
       throw $e;
    }
}


function DeactivateTeacher($staffID) {
    global $db;
    try {
        $query = "UPDATE tblTeacherDetails SET
                  Status =2 
                  WHERE employeeStaffID=:staffID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':staffID', $staffID);  
         $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}


function ReactivateTeacher($staffID) {
    global $db;
    try {
        $query = "UPDATE tblTeacherDetails SET
                  Status =1 
                  WHERE employeeStaffID=:staffID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':staffID', $staffID);  
         $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}



function DeactivateStudent($studentID) {
    global $db;
    try {
        $query = "UPDATE tblStudentDetails SET
                  Status =2 
                  WHERE studentID=:studentID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':studentID', $studentID);  
         $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}


function ReactivateStudent($studentID) {
    global $db;
    try {
        $query = "UPDATE tblStudentDetails SET
                  Status =1 
                  WHERE studentID=:studentID";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':studentID', $studentID);  
         $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}



function updateExercise($student_ID,$ExerciseID,$Topic,$SubTopic,$Title,$HighestPossibleMark,$exerciseMark,
        $exerciseComment,$StudentExerciseID) {

    global $db;
    try {
        $query = "UPDATE tblExercises
              SET Topic=:Topic, 
                  subTopic=:SubTopic,
                  Title=:Title,
                  HighestPossibleMark=:HighestPossibleMark,
                  Mark=:exerciseMark,
                  Comment=:exerciseComment
              WHERE student_ID=:student_ID
              AND ExerciseID=:ExerciseID
              ";

        $stmt = $db->prepare($query);
        $stmt->bindParam(':Topic', $Topic);
        $stmt->bindParam(':SubTopic', $SubTopic);
        $stmt->bindParam(':Title', $Title);
$stmt->bindParam(':HighestPossibleMark', $HighestPossibleMark);
        $stmt->bindParam(':exerciseMark', $exerciseMark);
        $stmt->bindParam(':exerciseComment',$exerciseComment);
       $stmt->bindParam(':ExerciseID',$ExerciseID);
       $stmt->bindParam(':student_ID',$student_ID);
    $stmt->bindParam(':student_ID',$student_ID);

        return $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}




function UpdateTable() {
    global $db;
    try {
        $query = "UPDATE
    tblExercises
   SET
    tblExercises.[Mark] = tblExerciseTempTable.[Mark],
    tblExercises.[Comment] = tblExerciseTempTable.[Comment],
    tblExercises.[Topic] = tblExerciseTempTable.[Topic],
    tblExercises.[subTopic] = tblExerciseTempTable.[subTopic],
    tblExercises.[Title] = tblExerciseTempTable.[Title],
    tblExercises.[HighestPossibleMark] = tblExerciseTempTable.[HighestPossibleMark]
  FROM
     tblExercises 
  INNER JOIN
    tblExerciseTempTable
  ON 
    tblExercises.[student_ID] = tblExerciseTempTable.[student_ID]";
        $stmt = $db->prepare($query); 
         $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}



function CreateMarksTempTable() {
    global $db;
    try {
        $query = "CREATE TABLE [dbo].[tblExerciseTempTable](
    ExerciseID int NULL,subject_ID int NULL,
    form_ID int NULL,class_ID int NULL,
    student_ID nvarchar(50) NULL,staff_ID nvarchar(50) NULL,
    Topic nvarchar(50) NULL,subTopic nvarchar(50) NULL,
    Title nvarchar (50) NULL,HighestPossibleMark int NULL,
    Mark int NULL,Comment nvarchar(1000) NULL,
    ExcerciseDate date NULL)";
        $stmt = $db->prepare($query); 
         $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}



function DeleteMarksTempTable() {
    global $db;
    try {
        $query = "IF OBJECT_ID('tblExerciseTempTable', 'U') IS NOT NULL 
  DROP TABLE dbo.tblExerciseTempTable";
        $stmt = $db->prepare($query); 
         $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}

