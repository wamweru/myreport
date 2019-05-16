<?php
include('connect.php');

	$id=$_GET['id'];
	$query="SELECT*FROM teachers where id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
		$id1=$row['id'];
		$name=$row['name'];
		$tscno=$row['tscno'];
		$department=$row['department'];
	}
	
?>

<html>
	<head>
		<title>Add Students</title>
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
                    <div class="card card-body" style="height:400px;background-color: silver">
				<form class="form-horizontal" method="POST" style="height:350px" action="">
                    <h3>Update Teacher Details</h3>
                    <hr>
                    <div class="form-group">
                        <input type="text" class="form-control" name="id" value="<?php echo $id1;?>" placeholder="Id">
                
                    </div>
					<div class="form-group">
						<input type="text" class="form-control" name="name" value="<?php echo $name;?>"placeholder="Teacher name here" required>
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" name="tscno" value="<?php echo $tscno;?>" placeholder="Tsc No" required>
					</div>
					<div class="form-group">
						<select name="department" class="form-control" value="<?php echo $department;?>" required>
							<option value="Mathematics">Mathematics</option>
							<option value="Sciences">Sciences</option>
							<option value="Humanities">Humanities</option>
							<option value="Applied Sciences">Applied Sciences</option>
							<option value="Languages">Languages</option>
							<option value="Deans">Deans</option>
							<option value="Deputy Principal">Deputy Principal</option>
							<option value="Principal">Principal</option>
						</select>
					</div>
						
					
					
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block m-b-30 m-t-30"  name="submit">Update</button>
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
  if(isset($_POST['submit'])){
     $uname=$_POST['name'];
     $utscno=$_POST['tscno'];
     $udepartment=$_POST['department'];
     $queryupdate=mysqli_query($conn,"update teachers set name='$uname',tscno='$utscno',department='$udepartment' where id='$id'")or die(mysqli_error($conn));
     if($queryupdate){
        echo'<script>window.alert("record updated successfully")</script>';
        header('refresh:0;url=viewteacher.php');
        } else{
        echo'<script>window.alert("record not updated. Please try again.")</script>';
        header('refresh:0;url=teacherchange.php');			
        }
  }
?>
