<?php
include('connect.php');

	$id=$_GET['id'];
	$query="SELECT*FROM term2 where id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
		$id1=$row['id'];
		$event=$row['event'];
		$date=$row['date'];
		$time=$row['time'];
	}
	
?>

<html>
	<head>
        <title>DATA UPDATE</title>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>My.report | Admin</title>
            <meta name="description" content="Sufee Admin - HTML5 Admin Template">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <link rel="apple-touch-icon" href="apple-icon.png">
            <link rel="shortcut icon" href="favicon.ico">
        
            <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
            <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
            <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
            <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
        
        
            <link rel="stylesheet" href="assets/css/style.css">
        
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        
	</head>
	
	<body>
    
    <div class="container-fluid">
			<div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card card-body" style="height:100%;background-color: silver">
				<form class="form-horizontal" method="POST" action="">
                    <h3>Term 2 Dates</h3>
                    <hr>
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" value="<?php echo $id1;?>" placeholder="id">
                    </div>
					<div class="form-group">
                        <label>Event Name</label>
						<input type="text" class="form-control" name="event" value="<?php echo $event; ?>" placeholder="Event Name" required>
					</div>
					<div class="form-group">
                        <label>Date</label>
						<input type="date" class="form-control" name="date" value="<?php echo $date;?>" placeholder="Date" required>
					</div>
					<div class="form-group">
                        <label>Time</label>
						<input type="time" class="form-control" name="time" value="<?php echo $time;?>" placeholder="Time" required>
					</div>
					
						
					
					
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-lg btn-block m-b-30 m-t-30"  name="update" value="update">Update</button>
					</div>

                </form>
            </div>
            </div>
			</div>
    </div>
		
		
		
	</body>
	
</html>
<?php
  include('connect.php');
  if(isset($_POST['update'])){
     $uevent=$_POST['event'];
     $udate=$_POST['date'];
     $utime=$_POST['time'];
     $queryupdate=mysqli_query($conn,"update term2 set event='$uevent',date='$udate',time='$utime' where id='$id'")or die(mysqli_error($conn));
     if($queryupdate){
        echo'<script>window.alert("record updated successfully")</script>';
        header('refresh:0;url=viewdates.php');
        } else{
        echo'<script>window.alert("record not updated. Please try again.")</script>';
        header('refresh:0;url=dates.html');			
        }
  }
?>
