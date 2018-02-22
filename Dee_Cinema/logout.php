<?php
session_name('User');
	session_start();
	session_destroy();
	header('Location: index.php');
?>