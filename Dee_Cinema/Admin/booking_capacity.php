<?php 
include('../functions/config.php');
$session = $_POST['session'];
$limit = $_POST['booking_capacity'];


if($session=="Morning"){
	$query = "UPDATE booking_capacity SET morning = $limit";
	$myquery = mysqli_query($connection, $query);

	if ($myquery) {
		echo "<script class='text-success'>alert('Morning Booking capacity set!');</script>";
		echo "<script class='text-success'>window.open('booking_limit.php','_self')</script>";
	}
	 else {
            echo "<script class='text-success'>alert('Unable to set'); return false;</script>";

            echo "<script class='text-success'>window.open('booking_limit.php','_self')</script>";
        }


}
elseif($session=="Afternoon"){
$query = "UPDATE booking_capacity SET afternoon = $limit";
	$myquery = mysqli_query($connection, $query);

	if ($myquery) {
		echo "<script class='text-success'>alert('Afternoon Booking capacity set!');</script>";
		echo "<script class='text-success'>window.open('booking_limit.php','_self')</script>";
	}
	 else {
            echo "<script class='text-success'>alert('Unable to set'); return false;</script>";

            echo "<script class='text-success'>window.open('booking_limit.php','_self')</script>";
        }


}
elseif($session=="Evening"){
 $query = "UPDATE booking_capacity SET evening = $limit";
	$myquery = mysqli_query($connection, $query);

	if ($myquery) {
		echo "<script class='text-success'>alert('Evening Booking capacity set!');</script>";
		echo "<script class='text-success'>window.open('booking_limit.php','_self')</script>";
	}
	 else {
            echo "<script class='text-success'>alert('Unable to set'); return false;</script>";

            echo "<script class='text-success'>window.open('booking_limit.php','_self')</script>";
        }


}
elseif($session=="Night"){
	$query = "UPDATE booking_capacity SET night = $limit";
	$myquery = mysqli_query($connection, $query);

	if ($myquery) {
		echo "<script class='text-success'>alert('Night Booking capacity set!');</script>";
		echo "<script class='text-success'>window.open('booking_limit.php','_self')</script>";
	}
	 else {
            echo "<script class='text-success'>alert('Unable to set'); return false;</script>";

            echo "<script class='text-success'>window.open('booking_limit.php','_self')</script>";
        }


}

?>