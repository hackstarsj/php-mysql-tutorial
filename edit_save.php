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
$qr=mysqli_query($con,"UPDATE student_details set name='".$_REQUEST['name']."',password='".$_REQUEST['password']."',standard='".$_REQUEST['standard']."',subject='".$subjects."',dob='".$_REQUEST['dob']."',gender='".$_REQUEST['gender']."',updated_at='".date('Y-m-d H:i:s')."' where id='".$_REQUEST['id']."'");

if($qr){
	echo "<script>alert('Edit Successful')</script>";
	echo "<script>location='index.php'</script>";
}
else{
	echo mysqli_error($con);
	echo "<script>alert('Error in Saving Data')</script>";
//	echo "<script>location='index.php'</script>";	
}
?>