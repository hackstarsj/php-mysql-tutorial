<?php
//let's save it
include 'connect.php';
$subject=$_REQUEST['subject'];
$subjects="";
if(is_array($subject)){
	foreach($subject as $s){
		$subjects.=$s." , ";
	}
	rtrim($subjects,",");
}
$qr=mysqli_query($con,"INSERT into student_details (name,password,standard,subject,dob,gender,created_at,updated_at,is_active) values ('".$_REQUEST['name']."','".$_REQUEST['password']."','".$_REQUEST['standard']."','".$subjects."','".$_REQUEST['dob']."','".$_REQUEST['gender']."','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."','1')");

if($qr){
	echo "<script>alert('Save Successful')</script>";
	echo "<script>location='index.php'</script>";
}
else{
	echo mysqli_error($con);
	echo "<script>alert('Error in Saving Data')</script>";
//	echo "<script>location='index.php'</script>";	
}
?>