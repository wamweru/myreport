<?php
include('connect.php');
	session_destroy();
	header('refresh:0;url=index.html');
	echo"Logging out...";
	
	
?>