<?php

if(isset($_GET['edit_movie'])){

    $edit_id = $_GET['edit_movie'];

    $get_edit = "SELECT * from movies where movie_id = '$edit_id'";

    $run_edit = mysqli_query($connection , $get_edit);

    $row_edit = mysqli_fetch_array($run_edit);

    $update_id = $row_edit['movie_id'];
    $movie_title = $row_edit['movie_title'];
    $movie_genre = $row_edit['movie_genre'];
    $movie_cover = $row_edit['movie_cover'];
    $movie_information = $row_edit['movie_information'];
    $movie_date = $row_edit['movie_date'];
    $movie_session = $row_edit['session_name'];
}

//getting the product relevant category
    $get_cat = "select * from genres where genre_id = '$movie_genre'";
    $run_cat = mysqli_query($connection , $get_cat);
    $cat_row = mysqli_fetch_array($run_cat);
    $cat_title = $cat_row['genre_title'];

    //getting the exact session for the movie
    $get_session = "select * from sessions where session_id = '$movie_session'";
    $run_session = mysqli_query($connection , $get_session);
    $cat_session = mysqli_fetch_array($run_session);
    $session_title = $cat_session['session_name'];


?>


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
<body style="background:url(../images/apple.jpg);background-size: cover;background-position: center;">



<div class="col-md-8 col-md-offset-2" style="background:white;opacity: 0.8;margin-top:40px;padding: 10px; font-family:verdana; ">
    <form role="form" action="admin.php" method="post" class="form-horizontal center-block" enctype="multipart/form-data" >
        <h2 class="text-center" style="color:#1E90FF">Update Movie</h2><br>
        <div class="form-group">
            <label class="col-md-3 col-md-offset-2  text-right" role="">Movie ID:</label>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="movie_id" placeholder="Enter Movie ID" value="<?php echo $update_id; ?>" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-md-offset-2  text-right" role="">Movie Title:</label>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="movie_title" placeholder="Enter Movie Title" value="<?php echo $movie_title; ?>" >
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 col-md-offset-2 text-right" role="">Movie Genre:</label>
            <div class="form-group col-md-4">
                <select name="movie_genre" class="form-control" >
                    <option><?php echo $movie_genre; ?></option>
                    <?php
                    $get_cats = "select * from genres";

                    $cat_query = mysqli_query($connection , $get_cats);

                    while($row = mysqli_fetch_array($cat_query)){

                        $cat_id = $row['genre_id'];
                        $cat_title = $row['genre_title'];

                        echo "<option value='$cat_title'>$cat_title</option>";
                    }



                    ?>


                </select>
            </div>
        </div>

       

        <div class="form-group">
            <label class="col-md-3 col-md-offset-2 text-right" role="">Movie Cover:</label>
            <div class="form-group col-md-4">
                <input type="file" class="form-control" name="movie_cover" value="movie_cover/<?php echo $movie_cover?>" >
                <img src="movie_cover/<?php echo $movie_cover?>" width="100px"  height="100px"  />
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 col-md-offset-2 text-right" role="">Movie Information:</label>
            <div class="form-group col-md-4">
                <textarea class="form-control" name="movie_information" rows="3" cols="30" placeholder="Enter movie information" ><?php echo $movie_information; ?> </textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-md-offset-2  text-right" role="">Movie Date:</label>
            <div class="form-group col-md-4">
                <input type="date" class="form-control" name="movie_date" value="<?php echo $movie_date; ?>" >
            </div>
        </div>
         <div class="form-group">
            <label class="col-md-3 col-md-offset-2 text-right" role="">Movie Session:</label>
            <div class="form-group col-md-4">
                <select name="movie_session" class="form-control" >
                    <option><?php echo $movie_session; ?></option>
                    <?php
                    $get_cats = "select * from sessions";

                    $cat_query = mysqli_query($connection , $get_cats);

                    while($row = mysqli_fetch_array($cat_query)){

                        $session_id = $row['session_id'];
                        $cat_session = $row['session_name'];

                        echo "<option value='$cat_session'>$cat_session</option>";
                    }



                    ?>


                </select>
            </div>
        <div class="form-group">
            <label class="col-md-3 col-md-offset-2 text-right " role="">&nbsp</label>
            <div class="form-group col-md-4 ">
                <input type="submit" class="form-control "  name="update" value="Update Movie" >
            </div>
        </div>
    </form>
</div>
</body>
</html>

