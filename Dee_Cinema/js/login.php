<link rel="stylesheet" type="text/css" href="dee.css">
<body style="background: url('real2.jpg');height: 100%;background-size:cover; background-position:center; background-repeat: no-repeat;" >
	<h3 style="font-family:allura; font-size: 2em; font-color:brown;">Login!</h3>
<form method="POST" action="home.php" class="form-horizontal" role="form" style="width:40%; margin:auto;padding:1%; margin-top:10%; font-family:cambria;">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Username:</label>
    <div class="col-sm-10">
      <input type="text" name="user" id="user" class="form-control" id="email" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" name="pass" id="pass" class="form-control" id="pwd" placeholder="Enter password">
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