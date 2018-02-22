<?php include_once('functions/config.php');
$name = $_POST['name'];
$movie = $_POST['movie'];
$date = $_POST['date'];
$session = $_POST['session'];

if($name==""||$movie==""||$date==""||$session=="") {
	echo "<script class='text-success'>alert('Empty fields!');</script>";
	echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
	return false;
}
else{

	$limit = "SELECT * FROM booking_capacity";
	$morning_limit = mysqli_query($connection, $limit);
	$num_limit = mysqli_fetch_array($morning_limit);
	$the_morning__limit = $num_limit['morning'];
	$the_afternoon_limit = $num_limit['afternoon'];
	$the_evening_limit = $num_limit['evening'];
	$the_night_limit = $num_limit['night'];



	$getAllInMorning = "SELECT * FROM morning_session";
	$myrecord = mysqli_query($connection, $getAllInMorning);
	$num_rows = mysqli_num_rows($myrecord);

	$getAllInAfternoon = "SELECT * FROM afternoon_session";
	$myrecord = mysqli_query($connection, $getAllInAfternoon);
	$num_rows_two = mysqli_num_rows($myrecord);


	$getAllInEvening = "SELECT * FROM evening_session";
	$myrecord = mysqli_query($connection, $getAllInEvening);
	$num_rows_three = mysqli_num_rows($myrecord);

	$getAllInNight = "SELECT * FROM night_session";
	$myrecord = mysqli_query($connection, $getAllInNight);
	$num_rows_four = mysqli_num_rows($myrecord);

if($session=="Morning"){
 if ($num_rows <= $the_morning_limit) {

	$query = "INSERT INTO morning_session(full_name,movie,date,session) VALUE('$name','$movie','$date','$session')";

	$myquery = mysqli_query($connection, $query);

	if($myquery){
		echo "<script class='text-success'>alert('Booking Successful!');</script>";
		echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
	}
	else{
		echo "<script class='text-success'>alert('Booking Unsuccessful!');</script>";
		echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
	}
}
else{
	echo "<script class='text-success'>alert('No available seat!');</script>";
	echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
}
}

elseif($session=="Afternoon"){
	if($num_rows_two <= $the_afternoon_limit){
	$query = "INSERT INTO afternoon_session(full_name,movie,date,session) VALUE('$name','$movie','$date','$session')";

	$myquery = mysqli_query($connection, $query);

	if($myquery){
		echo "<script class='text-success'>alert('Booking Successful!');</script>";
		echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
	}
	else{
		echo "<script class='text-success'>alert('Booking Unsuccessful!');</script>";
		echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
	}
}
else{
	echo "<script class='text-success'>alert('No available seat!');</script>";
	echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
}
}
elseif($session=="Evening"){
	if($num_rows_three <= $the_evening_limit){
	$query = "INSERT INTO evening_session(full_name,movie,date,session) VALUE('$name','$movie','$date','$session')";

	$myquery = mysqli_query($connection, $query);

	if($myquery){
		echo "<script class='text-success'>alert('Booking Successful!');</script>";
		echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
	}
	else{
		echo "<script class='text-success'>alert('Booking Unsuccessful!');</script>";
		echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
	}
 }
 else{
	echo "<script class='text-success'>alert('No available seat!');</script>";
	echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
}
}
elseif($session=='Night'){
	if($num_rows_four <= $the_night_limit){
	$query = "INSERT INTO night_session(full_name,movie,date,session) VALUE('$name','$movie','$date','$session')";

	$myquery = mysqli_query($connection, $query);

	if($myquery){
		echo "<script class='text-success'>alert('Booking Successful!');</script>";
		echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
	}
	else{
		echo "<script class='text-success'>alert('Booking Unsuccessful!');</script>";
		echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
	}
}
else{
	echo "<script class='text-success'>alert('No available seat!');</script>";
	echo "<script class='text-success'>window.open('bookings.php','_self')</script>";
}
}

}	
?>