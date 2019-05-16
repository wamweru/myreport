<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"mereport");

$name=$_POST['name'];
$yearofadm=$_POST['yearofadm'];
$admno=$_POST['admno'];
$nemis=$_POST['nemis'];
$class=$_POST['class'];


$query="INSERT INTO students(id,name,yearofadm,admno,nemis,class)VALUE(NULL,'$name','$yearofadm','$admno','$nemis','$class')";
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
						window.location.href='addstudent.html';
						</script>
						<?php

}

?>
