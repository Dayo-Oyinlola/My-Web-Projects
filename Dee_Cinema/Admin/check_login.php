<?php
include('../functions/config.php');
include('../functions/DayoMysql.php');
$dayo = new DayoMysql($connection);
$user = $_POST['user'];
$pass = $_POST['pass'];
$row = $dayo->getRowTwo("username","$user","password","$pass","admin");
if(count($row)==0){
 $dayo->display_error("Invalid User");
}
else{
  session_name('admin');
  session_start();
  $row= $dayo->getRowTwo("username","$user","password","$pass","admin");
  $_SESSION['username'] = $user;
  $_SESSION['theperson'] = $row['username'];
  $_SESSION['security'] = "mylock"; 
  header('Location: admin.php');
}

?>