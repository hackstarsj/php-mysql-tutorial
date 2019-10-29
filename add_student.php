<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
	<style type="text/css">
		div{
			padding: 15px;
			margin: 15px;
			border-bottom: 1px solid grey;
		}
	</style>
</head>
<body>
	<form action="save_student.php" method="post">
		<div>
		<label>Name</label>
		<input type="text" name="name">
		</div>
		<div>
		<label>Password</label>
		<input type="text" name="password">
		</div>
		<div>
		<label>Standard</label>
		<input type="text" name="standard">
		</div>
		<div>
		<label>Subject</label>
		<br>
		<input type="checkbox" name="subject[]" value="php"> PHP<br>
		<input type="checkbox" name="subject[]" value="java"> JAVA<br>
		<input type="checkbox" name="subject[]" value="python"> Python<br>
		</div>
		<div>
		<label>DOB</label>
		<input type="text" name="dob">
		</div>
		<div>
		<label>Gender</label>
		<select name="gender">
			<option>Male</option>
			<option>Female</option>
		</select>
		</div>
		<div>
		<input type="submit" name="submit" value="Save Student">
		</div>
		
	</form>

</body>
</html>