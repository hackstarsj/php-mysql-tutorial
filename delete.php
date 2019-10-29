<?php
include 'connect.php';
$qr=mysqli_query($con,"DELETE from student_details where id='".$_REQUEST['id']."'");
if($qr){
	echo "<script>alert('Successfully Deleted')</script>";
	echo "<script>location='index.php'</script>";
}
else{
	echo mysqli_error($con);
	echo "<script>alert('Error in Deleting Data')</script>";
//	echo "<script>location='index.php'</script>";	
}