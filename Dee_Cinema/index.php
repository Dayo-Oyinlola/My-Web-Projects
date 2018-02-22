
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery/jquery.js"></script>
    <script src="jquery/jquery.min.js"></script>
<title>Dee Cinema</title>
<link rel="stylesheet" type="text/css" href="dee.css">
<body style="background: radial-gradient(circle, lightgrey,white, skyblue);;height: 100%;background-size:cover; background-position:center; background-repeat: no-repeat;" >
	<h3 style="font-family:allura; font-size: 2em; font-color:brown;">Sign In!</h3>
<form method="POST" action="check_login.php" class="form-horizontal" role="form" style="width:40%; margin:auto;padding:1%; margin-top:10%; font-family:cambria;">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Username:</label>
    <div class="col-sm-10">
      <input type="text" name="user" id="user" class="form-control" id="email" style="width:80%" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" name="pass" id="pass" class="form-control" id="pwd" style="width:80%" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default" style="color:purple">Submit</button>
      
    </div>
  </div>
  <p>Are you new to Dee Cinema? <a href="registration.php" id="reg">Click here to sign up</a></p>

</form> 

</body>