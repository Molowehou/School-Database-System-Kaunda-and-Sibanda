SELECT student_ID,[1] as Accounts, [2] As Maths
FROM 

(SELECT student_ID, subject_ID, Mark
FROM 
tblExams) ps
PIVOT (

SUM(Mark)
For subject_ID IN
([1],[2])

) as PVT



SELECT student_ID,studentFirstName,studentLastName,[1] as Accounts, [2] As Commerce,[3] As [Business Studies],[4] As Mathematics,[5] As [Geography],[6] As Ndebele,
				  [7] As English,[8] As Biology,[9] As [Intergrated Science],[10] As Physics,[11] As Chemistry,[12] As Zulu,[13] As ICT

FROM 
(SELECT student_ID, subject_ID, Mark
FROM 
tblExams
 ) ps
     
	 LEFT OUTER JOIN tblStudentDetails
     ON student_ID=tblStudentDetails.[studentID]

PIVOT (
SUM(Mark)
For subject_ID IN
([1],[2],[3],[4],[5],[6],[7],[8],[9],[10],[11],[12],[13])


) as PVT


