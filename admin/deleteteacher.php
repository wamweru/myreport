<?php
include('connect.php');

	
		$id=$_GET['id'];
		$query="delete from teachers where id='$id'";
		$delete_query=mysqli_query($conn,$query);
		if($delete_query){
            ?>
			<script>alert("Delete Successful");
			window.location.href='viewteacher.php';
			</script>
		<?php
        
           
            
			
		}else{
            ?>
			<script>alert('Delete failed,Please Try again');
            window.location.href='viewteacher.php';
            </script>
            <?php
			
		}
	
?>