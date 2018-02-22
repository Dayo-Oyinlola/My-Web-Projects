 

<head>
 <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="icon" type="text/icon" href="2.png"/>
    <link rel="stylesheet" href="styles/main.css"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery/jquery.js"></script>
    <script src="jquery/jquery.min.js"></script>
<script>
function myval(){
var username=document.getElementById('user').value;
var password=document.getElementById('pass').value;
if(username===""|| password===""){
  window.alert("Invalid login");
  return false;
}
}
</script>

</head>
<body style="background: radial-gradient(circle, lightgrey,white, skyblue);">
	<h3 style="font-family:allura; font-size: 2em; font-color:brown;">Login!</h3>
<form method="POST" action="check_login.php" class="form-horizontal" role="form" style="width:40%; margin:auto;padding:1%; margin-top:10%; font-family:cambria;">
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
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default" onClick="return myval()" style="color:purple">Submit</button>
      
    </div>
  </div>
</form> 

</body>