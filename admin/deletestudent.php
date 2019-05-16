<?php
include('connect.php');

	
		$id=$_GET['id'];
		$query="delete from students where id='$id'";
		$delete_query=mysqli_query($conn,$query);
		if($delete_query){
            ?>
			<script>alert("Delete Successful");
			window.location.href='viewstudent.php';
			</script>
		<?php
        
           
            
			
		}else{
            ?>
			<script>alert('Delete failed');
            window.location.href='viewstudent.php';
            </script>
            <?php
			
		}
	
?>