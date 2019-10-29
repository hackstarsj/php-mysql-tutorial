<?php 

$con=mysqli_connect("localhost","root","","student");
if(!$con){

	die("Failed to Connect to Database...");
}
//succesfully Connected