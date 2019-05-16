<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"mereport");

$name=$_POST['name'];
$tscno=$_POST['tscno'];
$department=$_POST['department'];


$query="INSERT INTO teachers(id,name,tscno,department)VALUE(NULL,'$name','$tscno','$department')";
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
						window.location.href='addteacher.html';
						</script>
						<?php

}

?>
