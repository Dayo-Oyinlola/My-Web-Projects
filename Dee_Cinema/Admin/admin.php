<?php
    session_name('admin');
    session_start();
    if(!isset($_SESSION['security']) && ($_SESSION['security'] !="mylock")){
        header('Location: index.php');

    }
?>
    <?php include('../functions/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="icon" type="text/icon" href="../images/logo.png"/>
    <link rel="stylesheet" href="../style/dee.css"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery/jquery.js"></script>
    <script src="jquery/jquery.min.js"></script>



</head>
<body style="background: radial-gradient(circle, lightgrey,white, skyblue);" >


<div id = "header">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-md-12" style="background:transparent;color:white">
                <h3   style="margin-left: 30px;font-family:'arial'"><img src="../images/logo.png" width="40px" height="40px"><a href="admin.php" style="font-family:vivaldi; font-size:2em; color: white;
    text-shadow: 2px 2px 4px #000000;text-decoration:none">Dee Cinema Admin Panel</a> </h3>

    </div>
        </div>


        <div class="container-fluid">
            <div class="row">
            <div class="col-md-10">



                <?php
                if(isset($_GET['insert_movie'])){

                    include ('insert_movie.php');
                }

                //view products

                if(isset($_GET['view_movies'])){

                    include ('view_movies.php');
                }

                if(isset($_GET['edit_movie'])){

                    include ("edit_movie.php");
                }
                if(isset($_GET['booking_limit'])){

                    include ("booking_limit.php");
                }
                if(isset($_GET['trailer'])){

                    include ("trailer.php");
                }
                 if(isset($_GET['edit_completed'])){

                    include ("edit_completed.php");
                }
                if(isset($_GET['view_cats'])){

                    include ("view_cats.php");
                }
                 if(isset($_GET['insert_rent'])){

                    include ("insert_rent.php");
                }
                if(isset($_GET['view_rent'])){

                    include ("view_rent.php");
                }
                if(isset($_GET['insert_completed'])){

                    include ("insert_completed.php");
                }
                if(isset($_GET['view_completed'])){

                    include ("view_completed.php");
                }
                if(isset($_GET['insert_properties'])){

                    include ("insert_properties.php");
                }
                 if(isset($_GET['view_properties'])){

                    include ("view_properties.php");
                }




                if(isset($_GET['edit_cat'])){
                    include('edit_cat.php');
                }



                if(isset($_GET['insert_cat'])){

                    include ("insert_cat.php");
                }

                ?>




            </div>
            <div class="col-md-2" style="background: #1E90FF; border-radius: 20px; padding:20px; border: 1px solid black; font-family:arial;">
                <h3 class="text-warning text-center" style="color: white">Manage Content</h3>
                <a href="admin.php?insert_movie" class="btn btn-default center-block admin_btn " >Insert Movie</a>
                <a href="admin.php?view_movies" class="btn btn-default center-block admin_btn " >View Movies</a>
                <a href="admin.php?booking_limit" class="btn btn-default center-block admin_btn " >Booking Capacity</a>     
                                        
                <a href="admin.php?trailer" class="btn btn-default center-block admin_btn " >Trailers</a>                 
                <a href="logout.php" class="btn btn-default center-block admin_btn " >Admin Logout</a>
                </div>
        </div>
    </div>

</div>





</body>
</html>



<!--php admin insert product into database script-->
<?php

if(isset($_POST['insert_movie'])) {


    $movie_title = $_POST['movie_title'];
    $movie_genre = $_POST['movie_genre'];
    $movie_information = $_POST['movie_information'];
    $movie_date = $_POST['movie_date'];
    $movie_session = $_POST['movie_session'];

    $the_movie_cover = $_FILES['movie_cover']['name'];
    $movie_cover_tmp = $_FILES['movie_cover']['tmp_name'];

    $the_movie_trailer = $_FILES['trailer']['name'];
    $movie_trailer = $_FILES['trailer']['tmp_name'];

    if($movie_title=="" || $movie_genre ==""||$movie_information==""||$movie_date==""||$movie_session==""){
        echo "<script>alert('All fields must be filled');</script>";
        echo "<script>window.open('admin.php?insert_movie','_self'); </script>";

        exit();

    }
    else {


        move_uploaded_file($movie_cover_tmp, "movie_cover/$the_movie_cover");


        $insert_movie = " INSERT INTO movies (movie_title,movie_genre,movie_cover,movie_information,movie_date,session_name) 
         VALUES ('$movie_title','$movie_genre','$the_movie_cover','$movie_information','$movie_date','$movie_session') ";

        $insert_query = mysqli_query($connection, $insert_movie);

        if ($insert_query){
            echo "<script class='text-success'>alert('Movie inserted successfully');</script>";
            echo "<script class='text-success'>window.open('admin.php?insert_movie','_self')</script>";
        } else {
            echo "<script class='text-success'>alert('unable to insert'); return false;</script>";

            echo "<script class='text-success'>window.open('admin.php?insert_movie','_self')</script>";
        }

    }
}


?>

<!--php admin insert rent product into database script-->
<?php

if(isset($_POST['insert_trailer'])) {
   
    $trailer_title = $_POST['trailer_title'];
    $trailer_genre = $_POST['trailer_genre'];


    $the_trailer_clip = $_FILES['trailer_clip']['name'];
   
    $trailer_tmp = $_FILES['trailer_clip']['tmp_name'];
    
    if($trailer_title==""||$trailer_genre==""||$the_trailer_clip==""){
        echo "<script>alert('All fields must be filled');</script>";      
        echo "<script>window.open('admin.php?trailer','_self'); </script>";  

    }
    else {
         move_uploaded_file($trailer_tmp, "trailer/$the_trailer_clip");

        $insert_trailer = "INSERT INTO trailers(trailer_title,trailer_genre,trailer_clip) 
         VALUES('$trailer_title','$trailer_genre','$the_trailer_clip')";

        $insert_query = mysqli_query($connection, $insert_trailer);

        if ($insert_query){
            echo "<script class='text-success'>alert('Trailer inserted successfully');</script>";
            echo "<script class='text-success'>window.open('admin.php?trailer','_self')</script>";
        } else {
            echo "<script class='text-success'>alert('unable to insert'); return false;</script>";

            echo "<script class='text-success'>window.open('admin.php?trailer','_self')</script>";
        }

    }
}


?>


 

<!--admin updating edited products into the database -->
<?php

if(isset($_POST['update'])) {
    $movie_id = $_POST['movie_id'];
    $movie_title = $_POST['movie_title'];
    $movie_information = $_POST['movie_information'];
    $movie_date = $_POST['movie_date'];
    $movie_session = $_POST['movie_session'];

    $the_movie_cover = $_FILES['movie_cover']['name'];
    $movie_cover_tmp = $_FILES['movie_cover']['tmp_name'];

    if ($movie_title == "" || $movie_information == "") {
        echo "<script >alert('All fields must be filled')</script>";
        echo "<script >window.open('admin.php?view_movies','_self')</script>";
    }else{

        move_uploaded_file($movie_cover_tmp  ,"movie_cover/$the_movie_cover");


        $update_pro = "UPDATE movies SET movie_title = '$movie_title',movie_information= '$movie_information', movie_cover = '$the_movie_cover',movie_date ='$movie_date',session_name = '$movie_session' WHERE movie_id = '$movie_id' ";


        $updating = mysqli_query($connection, $update_pro);

        if ($updating) {
            echo "<script class='text-success'>alert('Movie Updated successfully')</script>";
            echo "<script class='text-success'>window.open('admin.php?view_movies','_self')</script>";
            exit();
        } else {
            echo "<script class='text-success'>alert('unable to insert')</script>";
            echo "<script class='text-success'>window.open('admin.php?view_movies','_self')</script>";
            exit();
        }

    }
}

?>

<!--inserting new category-->
<?php
if(isset($_POST['insert_cat'])) {

    $the_cat = $_POST['cat'];

    if ($the_cat == "") {
        echo "<script class='text-success'>alert('category box should be filled')</script>";
        echo "<script class='text-success'>window.open('admin.php?insert_cat','_self')</script>";
        exit();
    } else {

        $cat_insert = "insert into categories (cat_title) VALUES ('$the_cat')";

        $run_cat_insert = mysqli_query($db, $cat_insert);

        if ($run_cat_insert) {
            echo "<script class='text-success'>alert('New Category Inserted successfully')</script>";
            echo "<script class='text-success'>window.open('admin.php?insert.cat','_self')</script>";
            exit();

        } else {
            echo "<script class='text-success'>alert('unable to insert category')</script>";
            echo "<script class='text-success'>window.open('admin.php?insert_cat','_self')</script>";
            exit();
        }
    }
}

?>

<!--updating category-->

<?php


if(isset($_POST['update_cat'])) {

    $cat_title = $_POST['cat_title'];

    $insert_cat = "update categories set cat_title = '$cat_title' WHERE  cat_id = '$cat_edit_id'";
    $run_insert_cat = mysqli_query($db, $insert_cat);

    if ($run_insert_cat) {

        echo "<script class='text-success'>alert(' Category Updated successfully')</script>";
        echo "<script class='text-success'>window.open('admin.php?view.cats','_self')</script>";
        exit();
    } else {
        echo "<script class='text-success'>alert(' unable to update category')</script>";
        echo "<script class='text-success'>window.open('admin.php?view.cats','_self')</script>";
        exit();
    }
}
?>
<!--php admin insert completed product into database script-->
<?php

if(isset($_POST['insert_com'])) {


    $product_title = $_POST['product_title'];
    $product_location= $_POST['product_location'];
    $product_description = $_POST['product_description'];


    $the_product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    if($product_title ==""|| $product_location ==""|| $product_description ==""||$the_product_image==""){
        echo "<script>alert('All fields must be filled');</script>";
        echo "<script>window.open('admin.php?insert_completed','_self'); </script>";

        exit();

    }
    else {


        move_uploaded_file($product_image_tmp, "completed_projects/$the_product_image");


        $insert_product = "INSERT INTO completed_projects (project_title,project_image,project_location,project_description) 
         VALUES('$product_title','$the_product_image','$product_location','$product_description') ";

        $insert_query = mysqli_query($db, $insert_product);

        if($insert_query){
            echo "<script class='text-success'>alert('Product inserted successfully');</script>";
            echo "<script class='text-success'>window.open('admin.php?insert_completed','_self')</script>";
        } else {
            echo "<script class='text-success'>alert('unable to insert'); return false;</script>";

            echo "<script class='text-success'>window.open('admin.php?insert_completed','_self')</script>";
        }

    }
}


?>

<!-- insert properties -->
<?php

if(isset($_POST['insert_other'])) {


    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];
    $product_location = $_POST['product_location'];

    $the_product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    if($product_title=="" ||$product_price==""||$product_description==""||$product_location==""){
        echo "<script>alert('All fields must be filled');</script>";
        echo "<script>window.open('admin.php?insert_properties','_self'); </script>";

        exit();

    }
    else {


        move_uploaded_file($product_image_tmp, "properties/$the_product_image");


        $insert_product = " INSERT INTO other_products (product_title,product_image,product_price,product_description,product_location) 
         VALUES ('$product_title','$the_product_image','$product_price','$product_description','$product_location') ";

        $insert_query = mysqli_query($db, $insert_product);

        if ($insert_query) {
            echo "<script class='text-success'>alert('Product inserted successfully');</script>";
            echo "<script class='text-success'>window.open('admin.php?insert_properties','_self')</script>";
        } else {
            echo "<script class='text-success'>alert('unable to insert'); return false;</script>";

            echo "<script class='text-success'>window.open('admin.php?insert_properties','_self')</script>";
        }

    }
}


?>
<!-- admin updating rent products -->
<?php

if(isset($_POST['uptodate'])) {
    $pro_id = $_POST['product_id'];
    $pro_title = $_POST['product_title'];
    $pro_price = $_POST['product_price'];
    $pro_description = $_POST['product_description'];
    $pro_location = $_POST['product_location'];


    $the_pro_image = $_FILES['product_image']['name'];
    $pro_image_tmp = $_FILES['product_image']['tmp_name'];

     if($pro_title==""||$pro_description==""||$pro_location==""||$the_pro_image==""){
        echo "<script>alert('All fields must be filled');</script>";      
        echo "<script>window.open('admin.php?view_rent','_self'); </script>";  

        exit();

    }
    else {

        move_uploaded_file($pro_image_tmp  ,"rent_images/$the_pro_image");


        $update_pro = "UPDATE rent SET rent_title='$pro_title',rent_price='$pro_price',
rent_description='$pro_description',rent_image='$the_pro_image' where rent_id = '$pro_id' ";


        $updating = mysqli_query($db, $update_pro);

        if ($updating) {
            echo "<script class='text-success'>alert('Product Updated successfully')</script>";
            echo "<script class='text-success'>window.open('admin.php?view_rent','_self')</script>";
            exit();
        } else {
            echo "<script class='text-success'>alert('unable to insert')</script>";
            echo "<script class='text-success'>window.open('admin.php?view_rent','_self')</script>";
            exit();
        }
}
}
?>

<!-- updating completed projects -->
<?php

if(isset($_POST['update_com'])) {
    $pro_id = $_POST['product_id'];
    $pro_title = $_POST['product_title'];
    $pro_description = $_POST['product_description'];
    $pro_location = $_POST['product_location'];


    $the_pro_image = $_FILES['product_image']['name'];
    $pro_image_tmp = $_FILES['product_image']['tmp_name'];

     if($pro_title==""||$pro_description==""||$pro_location==""||$the_pro_image==""){
        echo "<script>alert('All fields must be filled');</script>";      
        echo "<script>window.open('admin.php?view_completed','_self'); </script>";  

        exit();

    }
    else {

        move_uploaded_file($pro_image_tmp  ,"completed_projects/$the_pro_image");


        $update_pro = "UPDATE completed_projects SET project_title='$pro_title',project_description='$pro_description',project_image='$the_pro_image' where project_id = '$pro_id' ";


        $updating = mysqli_query($db, $update_pro);

        if ($updating) {
            echo "<script class='text-success'>alert('Product Updated successfully')</script>";
            echo "<script class='text-success'>window.open('admin.php?view_completed','_self')</script>";
            exit();
        } else {
            echo "<script class='text-success'>alert('unable to insert')</script>";
            echo "<script class='text-success'>window.open('admin.php?view_completed','_self')</script>";
            exit();
        }

}
}
?>
<!-- updating completed projects -->
<?php

if(isset($_POST['update_prop'])) {
    $pro_id = $_POST['product_id'];
    $pro_title = $_POST['product_title'];
    $pro_description = $_POST['product_description'];
    $pro_price = $_POST['product_price'];
    $pro_location = $_POST['product_location'];


    $the_pro_image = $_FILES['product_image']['name'];
    $pro_image_tmp = $_FILES['product_image']['tmp_name'];

     if($pro_title==""||$pro_price==""||$pro_description==""||$pro_location==""||$the_pro_image==""){
        echo "<script>alert('All fields must be filled');</script>";      
        echo "<script>window.open('admin.php?view_properties','_self'); </script>";  

        exit();

    }
    else {

        move_uploaded_file($pro_image_tmp  ,"properties/$the_pro_image");

        $update_pro =  "UPDATE other_products SET product_title = '$pro_title', product_price='$pro_price', product_description = '$pro_description', product_image = '$the_pro_image' WHERE product_id = '$pro_id'";


        $updating = mysqli_query($db, $update_pro);

        if ($updating) {
            echo "<script class='text-success'>alert('Product Updated successfully')</script>";
            echo "<script class='text-success'>window.open('admin.php?view_properties','_self')</script>";
            exit();
        } else {
            echo "<script class='text-success'>alert('unable to insert')</script>";
            echo "<script class='text-success'>window.open('admin.php?view_properties','_self')</script>";
            exit();
        }
}
}
?>