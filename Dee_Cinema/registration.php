<!DOCTYPE html>
<head>
<title>Dee Cinema</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/logo.png" type="image/png">
  

  <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style/dee.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
  <h3 style="font-family:allura; font-size: 2em; font-color:brown;">Registration!</h3>
  <link rel="stylesheet" type="text/css" href="style/dee.css">
<script type="text/javascript" src="functions/DeeJs.js"></script>

<form id="reg" class="form-horizontal" method="POST" action="submit_reg.php" role="form" style="font-family:cambria; width:80%">
  <div class="form-group">
    <label class="control-label col-sm-2" for="text">First Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name"><br>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="text">Last Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name"><br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"><br>
    </div>
  </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="text">Age:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="age" name="age" placeholder="Age">
      </div>
    </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="text">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username"><br>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password"><br>
    </div>
  </div>
    <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="cpwd" placeholder="Confirm password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
     
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value="Submit" name="submit" onclick="return validation()" style="width:15%;">
    </div>
  </div>
  <p style="text-align:center">Already signed up? <a href="index.php">Login here!</a></p>
</form>

