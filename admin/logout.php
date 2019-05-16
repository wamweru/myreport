<?php
include('connect.php');
	session_destroy();
	header('refresh:0;url=login.html');
	echo"Logging out...";
	
	
?>