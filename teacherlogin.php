<?php
session_start();
$conn=mysqli_connect("localhost","root","","mereport") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
	$name=$_POST['name'];
    $tscno=$_POST['tscno'];
    $department=$_POST['department']
   `
    
	$admin=mysqli_query($conn,"select * from teachers where name='$name'and tscno='$tscno' and department='$department'")or die(mysqli_error($conn));
    
	$row2=mysqli_num_rows($admin);
	
    if($row2==1){
		while($rows2=mysqli_fetch_array($admin)){
			$_SESSION['name']=$rows2['name'];
            $_SESSION['tscno']=$rows2['tscno'];
            $_SESSION['department']=$rows2['department'];
        }
    }else{
	?>
	<script>
	    alert("Log In Failed");
	    window.location.href='teacherlogin.html';
	</script>
	<?php
	}
}

?>