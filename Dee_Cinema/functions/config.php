<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="adedayo";
$dbName="dee_cinema";

$connection=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$connection){
	echo "Connection not established to the database";
}
