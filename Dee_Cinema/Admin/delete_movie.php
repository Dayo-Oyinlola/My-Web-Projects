
<?php
include('../functions/config.php');

if(isset($_GET['delete'])) {

    $delete_id = $_GET['delete'];

    $get_delete= "delete from movies where movie_id = '$delete_id'";

    $run_delete = mysqli_query($connection, $get_delete);

    //$row_delete = mysqli_fetch_array($run_delete);



    if ($run_delete) {
        echo "<script class='text-success'>alert('Movie Deleted successfully')</script>";
        echo "<script class='text-success'>window.open('admin.php?view_movies','_self')</script>";
        exit();
    } else {
        echo "<script class='text-success'>alert('unable to delete movie')</script>";
        echo "<script class='text-success'>window.open('admin.php?view_movies','_self')</script>";
        exit();
    }
}

?>
