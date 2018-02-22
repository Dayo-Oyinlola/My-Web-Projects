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



<div class="col-md-8 col-md-offset-2" style="background:lightgrey; font-family:Verdana; opacity: 0.8;margin-top:40px;padding: 10px;">
<form role="form" action="admin.php" method="post" class="form-horizontal center-block" enctype="multipart/form-data" >
    <h2 class="text-center" style="color:#1E90FF">Insert Movie</h2><br>
    <div class="form-group">
        <label class="col-md-3 col-md-offset-2  text-right" role="">Movie Title:</label>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="movie_title" placeholder="Enter movie title" >
    </div>
    </div>


    <div class="form-group">
        <label class="col-md-3 col-md-offset-2 text-right" role="">Movie Genre:</label>
        <div class="form-group col-md-4">
            <select name="movie_genre" class="form-control" >
                <option >select genre</option>
                
<?php
        $get_cats = "select * from genres";

        $cat_query = mysqli_query($connection , $get_cats);

        while($row = mysqli_fetch_array($cat_query)){

            $genre_id = $row['genre_id'];
            $genre_title = $row['genre_title'];

            echo "<option value='$genre_title'>$genre_title</option>";
        }



?>


            </select>
        </div>
    </div>

  

    <div class="form-group">
        <label class="col-md-3 col-md-offset-2 text-right" role="">Movie Cover:</label>
        <div class="form-group col-md-4">
            <input type="file" class="form-control" name="movie_cover">
        </div>
    </div>
 

   
    <div class="form-group">
        <label class="col-md-3 col-md-offset-2 text-right" role="">Movie Information:</label>
        <div class="form-group col-md-4">
            <textarea class="form-control" name="movie_information" rows="3" cols="30" placeholder="Movie information" ></textarea>
        </div>
         </div>
 <div class="form-group">
        <label class="col-md-3 col-md-offset-2 text-right" role="">Movie Date:</label>
        <div class="form-group col-md-4">
            <input type="date" class="form-control" name="movie_date">
        </div>
    </div>
  <div class="form-group">
        <label class="col-md-3 col-md-offset-2 text-right" role="">Movie Session:</label>
        <div class="form-group col-md-4">
            <select name="movie_session" class="form-control" >
                <option > </option>
                
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
    </div>

    <div class="form-group">
        <label class="col-md-3 col-md-offset-2 text-right " role="">&nbsp</label>
        <div class="form-group col-md-4 ">
            <input type="submit" class="form-control "  name="insert_movie" value="Insert Movie" >
        </div>
    </div>
</form>
</div>
</body>
</html>



