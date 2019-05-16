<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"mereport");

$name=$_POST['name'];
$admno=$_POST['admno'];
$class=$_POST['class'];
$mathematics=$_POST['mathematics'];
$english=$_POST['english'];
$kiswahili=$_POST['kiswahili'];
$science=$_POST['science'];
$socialstudies=$_POST['socialstudies'];


$query="INSERT INTO form1(id,name,admno,class,mathematics,english,kiswahili,science,socialstudies)VALUE(NULL,'$name','$admno','$class','$mathematics','$english','$kiswahili','$science','$socialstudies')";
$insert=mysqli_query($conn,$query);
if ($insert){
	?>
						<script>alert("Save Successful");
						window.location.href='form1.php';
						</script>
						<?php

}else{
	?>
						<script>alert("Save Failed,please try again");
						window.location.href='resultsadd.php';
						</script>
						<?php

}

?>
