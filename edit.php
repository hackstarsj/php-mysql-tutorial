<?php
include 'connect.php';
$qr=mysqli_query($con,"select * from student_details where id='".$_REQUEST['id']."'");
if(mysqli_num_rows($qr)>0){

	$row=mysqli_fetch_assoc($qr);
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
	<style type="text/css">
		div{
			padding: 15px;
			margin: 15px;
			border-bottom: 1px solid grey;
		}
	</style>
</head>
<body>
	<form action="edit_save.php" method="post">
		<div>
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $row['name']; ?>">
		</div>
		<div>
		<label>Password</label>
		<input type="text" name="password" value="<?php echo $row['password']; ?>">
		</div>
		<div>
		<label>Standard</label>
		<input type="text" name="standard" value="<?php echo $row['standard']; ?>">
		</div>
		<div>
		<label>Subject</label>
		<br>
		<input type="checkbox" name="subject[]" value="php" <?php echo (strstr($row['subject'],"php")? 'checked' : ''); ?>> PHP<br>
		<input type="checkbox" name="subject[]" value="java" <?php echo (strstr($row['subject'],"java")? 'checked' : ''); ?>> JAVA<br>
		<input type="checkbox" name="subject[]" value="python" <?php echo (strstr($row['subject'],"python")? 'checked' : ''); ?>> Python<br>
		</div>
		<div>
		<label>DOB</label>
		<input type="text" name="dob" value="<?php echo $row['dob']; ?>">
		</div>
		<div>
		<label>Gender</label>
		<select name="gender">
			<option <?php echo (($row['gender']=="Male") ? 'selected' : ''); ?>>Male</option>
			<option <?php echo (($row['gender']=="Female") ? 'selected' : ''); ?>>Female</option>
		</select>
		</div>
		<div>
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		<input type="submit" name="submit" value="Save Student">
		</div>
		
	</form>

</body>
</html>


	<?php

}
else{
		echo "<script>alert('ID Not Found')</script>";
     	echo "<script>location='index.php'</script>";	
}