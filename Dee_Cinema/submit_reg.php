<?php
include('functions/config.php');

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$age = $_POST['age'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];

$query = "INSERT INTO users(first_name,last_name,email_address,username,password,age) VALUES('$first_name','$last_name','$email','$username','$pwd','$age')";

$myreg = mysqli_query($connection, $query);
if($myreg){
	echo "<script class='text-success'>alert('Insertion successfully');</script>";
	echo "<script class='text-success'>window.open('registration.php','_self')</script>";
}
else{
	return false;
	 echo "<script class='text-success'>alert('unable to insert'); return false;</script>";
	 echo "<script class='text-success'>window.open('registration.php','_self')</script>";
}
?>
