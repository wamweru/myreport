<?php
session_start();
$conn=mysqli_connect("localhost","root","","mereport") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
	$name=$_POST['name'];
    $nemis=$_POST['nemis'];
    $class=$_POST['class'];
    
	$admin=mysqli_query($conn,"select * from form1 where name='$name'and nemis='$nemis' and class='$class'")or die(mysqli_error($conn));
    
	$row2=mysqli_num_rows($admin);
	
    if($row2==1){
		while($rows2=mysqli_fetch_array($admin)){
			$_SESSION['name']=$rows2['name'];
			$_SESSION['nemis']=$rows2['nemis'];
			$_SESSION['class']=$rows2['class'];
			/*
				if($_SESSION['department']=="Deans"){
					?>
						<script>alert("Welcome,<?php echo$_SESSION['name']?>");
						window.location.href='deans.php';
						</script>
						<?php
				}elseif($_SESSION['department']=="Deputy Principal"){
					?>
						<script>alert("Welcome,<?php echo$_SESSION['name']?>");
						window.location.href='deans.php';
						</script>
						<?php

				}elseif($_SESSION['department']=="Principal"){
					?>
						<script>alert("Welcome,<?php echo$_SESSION['name']?>");
						window.location.href='deans.php';
						</script>
						<?php

				
				}else{
				?>
						<script>alert("Welcome,<?php echo$_SESSION['name']?>");
						window.location.href='dept.html';
						</script>
						<?php
					
			}
        }
        */
    	
	}else{
	?>
	<script>
	    alert("Log In Failed");
	    window.location.href='index.html';
	</script>
	<?php
	}
}

?>