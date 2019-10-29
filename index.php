<?php
//creating empty array
$data=array();
include 'connect.php';
$qr=mysqli_query($con,"select * from student_details");
while($row=mysqli_fetch_assoc($qr)){
	array_push($data,$row);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
</head>
<body>
<a href="add_student.php" style="padding: 10px;background:dodgerblue;color:#fff;text-decoration: none;margin: 10px;" >Add Student</a>	<br>
<table style="border-collapse: collapse;width:100%;margin-top: 20px;" border="1">

	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Password</th>
		<th>Standard</th>
		<th>Subject</th>
		<th>DOB</th>
		<th>Gender</th>
		<th>Added On</th>
		<th>Active</th>
		<th>Action</th>
	</tr>
	<?php
		foreach($data as $d){
			echo "<tr>";
			echo "<td>".$d['id']."</td>";
			echo "<td>".$d['name']."</td>";
			echo "<td>".$d['password']."</td>";
			echo "<td>".$d['standard']."</td>";
			echo "<td>".$d['subject']."</td>";
			echo "<td>".$d['dob']."</td>";
			echo "<td>".$d['gender']."</td>";
			echo "<td>".$d['created_at']."</td>";
			echo "<td>".($d['is_active']==1 ? 'Yes' : 'No')."</td>";
			echo "<td><a href='delete.php?id=".$d['id']."'>Delete</a>&nbsp;&nbsp;<a href='edit.php?id=".$d['id']."'>Edit</a></td>";

			echo "</tr>";
		}

	?>
	
</table>
</body>
</html>