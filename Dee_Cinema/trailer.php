<?php
include_once('header.php');
include_once('functions/config.php');
?>
<?php					 
					$movies = "SELECT * FROM trailers";
    
    $movies_query = mysqli_query($connection , $movies);

    $result = mysqli_num_rows($movies_query);
    
    if($result<1){
        echo "No movie at the moment";
    }

    while($row = mysqli_fetch_array($movies_query)){

        $movie_id= $row["trailer_id"];
        $movie_genre= $row["trailer_genre"];
        $movie_title= $row["trailer_title"];
        $movie_clip= $row["trailer_clip"];
       
       
					echo '
					<div class="col-lg-4 col-md-4" col-sm-6 col-xs-12">
					<video width="300px" height="300px" controls> <source src="Admin/trailer/'.$movie_clip.'" type="video/mp4"></video>
	
						<h5 class="text-center">Title: '.$movie_title.'</h5></p>
						<h5 class="text-center">Genre: '.$movie_genre.'</h5></p>
										</div>';
}
	

?>

<?php
include_once('footer.php');
?>
<video></video>