<?php
include_once('header.php');
include_once('functions/config.php');
?>
<section id="day1">
<h4 style="text-align:center; font-family: axial; color:red">ACTION</h4>
<div class="container">
<div class="row">
	<?php					 
					$movies = 'select * from movies where movie_genre="Action"';
    
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
</div>
</div>
<h4 style="text-align:center; font-family: axial; color:red">Romance</h4>
<div class="row">
<?php					 
					$movies = 'select * from movies where movie_genre="Romance"';
    
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
</div>
<h4 style="text-align:center; font-family: axial; color:red">Comedy</h4>
<?php					 
					$movies = 'select * from movies where movie_genre="Comedy"';
    
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