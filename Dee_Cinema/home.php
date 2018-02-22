<?php
	session_name('User');
	session_start();
	if(!isset($_SESSION['security']) && ($_SESSION['security'] !="mykey")){
		header('Location: index.php');

	}
?>
<?php include_once('header.php');?>
<?php include_once('functions/config.php');?>

<section id="one">
<h4 style="text-align:center; font-family: axial; color:red">LATEST RELEASE</h4>
<div class="container">
<div class="row">
					<?php					 
					$movies = "SELECT * FROM movies ORDER BY movie_id DESC LIMIT 18";
    
    $movies_query = mysqli_query($connection , $movies);

    $result = mysqli_num_rows($movies_query);
    
    if($result<1){
        echo "No movie at the moment";
    }

    while($row = mysqli_fetch_array($movies_query)){

        $movie_id= $row["movie_id"];
        $movie_genre= $row["movie_genre"];
        $movie_title= $row["movie_title"];
        $movie_information= $row["movie_information"];
        $movie_cover= $row["movie_cover"];
        $movie_date = $row['movie_date'];
        $movie_session = $row['session_name'];

					echo '
					<div class="col-lg-4 col-md-4" col-sm-6 col-xs-12">
						<img src= "Admin/movie_cover/'.$movie_cover.'" width="300px"  height="400px" class="center-block"/>
						<h5 class="text-center">Title: '.$movie_title.'</h5></p>
						<h5 class="text-center">Date: '. $movie_date . '</h5>
						<h5 class="text-center">Time: '. $movie_session . '</h5>
            			<h5 Class="text-center">Information: ' . $movie_information.'</h5> 
					</div>';
}
	

?>

<?php
include_once('footer.php');
?>