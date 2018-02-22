	<div class="col-md-4" id="sec">
		<img src="images/drive-angry.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
	<div class="col-md-4" id="sec">
		<img src="images/the_keeper.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
</div>
<div class="row">
	<div class="col-md-4" id="sec">
		<img src="images/patriots_day.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
	<div class="col-md-4" id="sec">
		<img src="images/the_hobbit.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
	<div class="col-md-4" id="sec">
		<img src="images/The-Last-Airbender.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
</div>
</div>
</section>
<section id="two">
<div class="container">
<div class="row">
	<div class="col-md-4" id="sec">
		<img src="images/resident-evil.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
	<div class="col-md-4" id="sec">
		<img src="images/the-nightmare.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
	<div class="col-md-4" id="sec">
		<img src="images/new-moon.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
</div>
</div>
</section>

<div class="col-md-4" id="sec">
		<img src="images/justice.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
	<div class="col-md-4" id="sec">
		<img src="images/drive-angry.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
	<div class="col-md-4" id="sec">
		<img src="images/the_keeper.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
</div>
</div>
</div>
</section>
<section id="day2">
<h4 style="text-align:center; font-family: axial; color:red">ROMANCE</h4>
<div class="container">
<div class="row">
	<div class="col-md-4" id="sec">
		<img src="images/patriots_day.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
	<div class="col-md-4" id="sec">
		<img src="images/the_hobbit.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
	<div class="col-md-4" id="sec">
		<img src="images/The-Last-Airbender.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
</div>
</div>
</div>
</section>
<section id="day2">
<h4 style="text-align:center; font-family: axial; color:red">COMEDY</h4>
<div class="container">
<div class="row">
	<div class="col-md-4" id="sec">
		<img src="images/resident-evil.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
	<div class="col-md-4" id="sec">
		<img src="images/the-nightmare.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
	<div class="col-md-4" id="sec">
		<img src="images/new-moon.jpg" id="myimg" class="img-responsive">
	<p>Movie title:<h5> </h5> </p>
	<p>Date:<h5> </h5></p>
	<p>Time:<h5> </h5></p>
	</div>
</div>
</div>
</div>
</section>
if($session=="Morning"){
	

}
elseif($session=="Afternoon"){

}
elseif($session=="Evening"){

}
elseif($session=="Night"){

}
$movies = "SELECT * FROM movies" ;
    
    $movies_query = mysqli_query($connection , $movies);
    while ($fetch = mysqli_fetch_array($movies_query)) {
        echo $fetch['movie_date'].'<br>';

    }
    ;