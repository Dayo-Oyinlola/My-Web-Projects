<?php
include_once('header.php');
include_once('functions/config.php');
?>
<section id="day1">
<h4 style="text-align:center; font-family: axial; color:red"><?php print_r(date("l, jS \of F Y 

"));;?></h4>
<div class="container">
<div class="row">
	<?php	
    $todays_date = date("Y-m-d");

			$movies = "SELECT * FROM movies WHERE movie_date = '$todays_date'" ;
    
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
</section>

<section id="day2">
<h4 style="text-align:center; font-family: axial; color:red"><?php
$date = date("Y-m-d");
echo date("l, jS \of F Y", strtotime("$date, +1 day"));
?></h4>
<div class="container">
<div class="row">
    <?php   
    $todays_date = date("Y-m-d");
    $mydate = date("Y-m-d", strtotime("$todays_date, +1 day"));

            $movies = "SELECT * FROM movies WHERE movie_date = '$mydate'" ;
    
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
</section>
<section id="day3">
<h4 style="text-align:center; font-family: axial; color:red"><?php
$date = date("Y-m-d");
echo date("l, jS \of F Y", strtotime("$date, +2 days"));
?></h4>
<div class="container">
<div class="row">
    <?php   
    $todays_date = date("Y-m-d",strtotime("$date, +2 days"));

            $movies = "SELECT * FROM movies WHERE movie_date = '$todays_date'" ;
    
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
</section>
<section id="day4">
<h4 style="text-align:center; font-family: axial; color:red"><?php
$date = date("Y-m-d");
echo date("l, jS \of F Y", strtotime("$date, +3 day"));
?></h4>
<div class="container">
<div class="row">
    <?php   
    $todays_date = date("Y-m-d",strtotime("$date, +3 days"));

            $movies = "SELECT * FROM movies WHERE movie_date = '$todays_date'" ;
    
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
</section>
<section id="day5">
<h4 style="text-align:center; font-family: axial; color:red"><?php
$date = date("Y-m-d");
echo date("l, jS \of F Y", strtotime("$date, +4 day"));
?></h4>
<div class="container">
<div class="row">
    <?php   
    $todays_date = date("Y-m-d",strtotime("$date, +4 days"));

            $movies = "SELECT * FROM movies WHERE movie_date = '$todays_date'" ;
    
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
</section>
<?php
include_once('footer.php');
?>