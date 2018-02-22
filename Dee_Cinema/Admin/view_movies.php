<html>
<body>

<?php if(isset($_GET['view_movies'])) { ?>
    <table class="table table-default " style="font-family:verdana">
        <tr>
            <thead style="background-color:#1E90FF; color:white;">

            <th> S/No</th>
            <th> Movie ID</th>
            <th> Title</th>
            <th> Cover</th>
            <th>Information</th>
            <th>Date</th>
            <th>Time</th>
            <th> Edit</th>
            <th> Delete</th>

            </thead>
        </tr>

        <?php

        $products = "select * from movies";
        $run_products = mysqli_query($connection, $products);

        $i = 0;
        while ($row_products = mysqli_fetch_array($run_products)) {

            $movie_id = $row_products['movie_id'];
            $movie_title = $row_products['movie_title'];
            $movie_cover = $row_products['movie_cover'];
            $movie_information = $row_products['movie_information'];
            $movie_date = $row_products['movie_date'];
            $movie_session = $row_products['session_name'];


            // $status = $row_products['status'];

            $i++;

            ?>

            <tbody style="background-color:lightgrey;">
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $movie_id; ?></td>
                <td><?php echo $pmovie_title ?></td>
                <td><img src="movie_cover/<?php echo $movie_cover; ?>" width='100px' height='100px'></td>
                <td><?php echo $movie_information?></td>
                <td><?php echo $movie_date?></td>
                <td><?php echo $movie_session?></td>
                
               
                <td><a href="admin.php?edit_movie=<?php echo $movie_id; ?>" style="color: #1E90FF; ">Edit</a></td>
                <td><a href="delete_movie.php?delete=<?php echo $movie_id; ?>" style="color: #1E90FF; ">Delete</a></td>
            </tr>
            </tbody>
        <?php } ?>


    </table>
    <?php } ?>


</body>
</html>

