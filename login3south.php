<?php
session_start();
$conn=mysqli_connect("localhost","root","","mereport") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
	$name=$_POST['name'];
    $nemis=$_POST['nemis'];
   
    
	$admin=mysqli_query($conn,"select * from 3south where name='$name'and nemis='$nemis'")or die(mysqli_error($conn));
    
	$row2=mysqli_num_rows($admin);
	
    if($row2==1){
		while($rows2=mysqli_fetch_array($admin)){
			$_SESSION['name']=$rows2['name'];
			$_SESSION['nemis']=$rows2['nemis'];
			$_SESSION['id']=$rows2['id'];
			$id=$_SESSION['id'];
			
				
				
					?>
						<script>alert("Welcome,<?php echo$_SESSION['name']?>");
						window.location.href='3southcat.php';
						</script>
						<?php

	}  
    	
	}else{
	?>
	<script>
	    alert("Log In Failed");
	    window.location.href='login3south.html';
	</script>
	<?php
	}
}

?>