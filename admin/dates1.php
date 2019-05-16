<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"mereport");

$event=$_POST['event'];
$date=$_POST['date'];
$time=$_POST['time'];



$query="INSERT INTO term2(id,event,date,time)VALUE(NULL,'$event','$date','$time')";
$insert=mysqli_query($conn,$query);

if ($insert){
	?>
						<script>alert("Save Successful");
						window.location.href='deans.php';
						</script>
						<?php

}else{
	?>
						<script>alert("Save Failed,please try again");
						window.location.href='dates1.php';
						</script>
						<?php

}

?>
