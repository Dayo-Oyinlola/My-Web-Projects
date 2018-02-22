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
    <h2 class="text-center" style="color:#1E90FF">Insert Trailer</h2><br>
    <div class="form-group">
        <label class="col-md-3 col-md-offset-2  text-right" role="">Trailer Title:</label>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="trailer_title" placeholder="Enter trailer title" >
    </div>
    </div>


    <div class="form-group">
        <label class="col-md-3 col-md-offset-2 text-right" role="">Trailer Genre:</label>
        <div class="form-group col-md-4">
            <select name="trailer_genre" class="form-control" >
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
        <label class="col-md-3 col-md-offset-2 text-right" role="">Trailer clip:</label>
        <div class="form-group col-md-4">
            <input type="file" class="form-control" name="trailer_clip">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-md-offset-2 text-right " role="">&nbsp</label>
        <div class="form-group col-md-4 ">
            <input type="submit" class="form-control "  name="insert_trailer" value="Insert Trailer" >
        </div>
    </div>
</form>
</div>
</body>
</html>



