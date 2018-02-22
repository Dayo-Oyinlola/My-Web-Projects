<?php
include_once('header.php');
include_once('functions/config.php');
?>
<?php
$myid = $_POST['movie'];
$query = "SELECT * FROM movies  WHERE movie_title = '$myid'";
$myquery = mysqli_query($connection, $query);
$my_array = mysqli_fetch_array($myquery);
$my_movie_id = $my_array['movie_id'];

$my_query_two = "SELECT * FROM movies WHERE movie_id = '$my_movie_id'";
$my_query_array = mysqli_query($connection, $my_query_two);
$fetch_array = mysqli_fetch_array($my_query_array);
$my_date = $fetch_array['movie_date'];
?>
<form class="form-horizontal" role="form" action="booking_processing.php" method="POST" id="book">
   <div class="form-group">
        <label class="control-label col-sm-2" for="text">Full Name:</label>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="name" placeholder="Enter full name"/>
    </div>
    </div>
	<div class="form-group">
        <label class="control-label col-sm-2" for="text">Movie:</label>
        <div class="form-group col-md-4">
            <select name="movie" class="form-control"style="height:20%">
                <option >select movie</option>    
<?php
        $get_cats = "select * from movies";

        $cat_query = mysqli_query($connection , $get_cats);

        while($row = mysqli_fetch_array($cat_query)){

            $movie_id = $row['movie_id'];
            $movie_title = $row['movie_title'];

            echo "<option>$movie_title</option>";
        }



?>
            </select>
        </div>
    </div>
	<div class="form-group">
	<label class="control-label col-sm-2" for="text">Date:</label>
	<input type="date" name="date" value="<?php global $my_date; echo "$my_date";?>" style="width:30%;height:20%;"/>
	</div>	
	<div class="form-group">
	<label class="control-label col-sm-2" for="text">Session:</label>
	<select name="session" id="list" style="height:20%;">
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
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

<?php
include_once('footer.php');