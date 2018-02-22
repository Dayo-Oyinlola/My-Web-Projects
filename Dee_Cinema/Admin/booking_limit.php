 <?php include('../functions/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery/jquery.js"></script>
    <script src="jquery/jquery.min.js"></script>
</head>
<body style="background:url();background-size: cover;background-position:center">
 <h2 class="text-center" style="color:#1E90FF">Booking Limit</h2><br>
 <form role="form" action="booking_capacity.php" method="post" class="form-horizontal center-block" enctype="multipart/form-data" >
<div class="form-group">
	<label class="control-label col-sm-2" for="text"> Booking Session:</label>
	<select name="session" name="session" style="height:15%; width:30%;">
		<option>Select session</option>
		<?php
        $get_cats = "select * from sessions";

        $cat_query = mysqli_query($connection , $get_cats);

        while($row = mysqli_fetch_array($cat_query)){

            $session_id = $row['session_id'];
            $session_name = $row['session_name'];

            echo "<option value='$session_name'>$session_name</option>";
        }



?>
	</select>
	</div>
    <div class="form-group">
        <label class="control-label col-sm-2">Booking Capacity:</label>
    <div class="form-group col-md-4">
        <input type="number" class="form-control" name="booking_capacity" placeholder="Enter Booking Capacity" >
    </div>
    </div>
     <div class="form-group">
        <label class="control-label col-sm-2">&nbsp</label>
        <div class="form-group col-md-4 ">
            <input type="submit" class="form-control "  name="booking" value="SET" style="width:15%;" >
        </div>
    </div>
</form>
</body>