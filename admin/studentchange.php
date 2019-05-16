<?php
include('connect.php');

	$id=$_GET['id'];
	$query="SELECT*FROM students where id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
		$id1=$row['id'];
		$name=$row['name'];
		$admno=$row['admno'];
        $yearofadm=$row['yearofadm'];
        $nemis=$row['nemis'];
        $class=$row['class'];
	}
	
?>

<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My.Report | Students' Details Update</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


		
    </head>
    
	
	<body>
    <body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                   
                </a>
            </div>

            <div class="login-form">
						<form class="form-horizontal" method="POST" action="">
								<h3>Update Student Details</h3>
                                <hr>
                                <div class="form-group">
									<input type="text" class="form-control" name="id" value="<?php echo$id1;?>"placeholder="Id" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="name" value="<?php echo$name;?>"placeholder="Student name here" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="yearofadm" value="<?php echo$yearofadm;?>"placeholder="Year Of Admission" required>
								</div>
								<div class="form-group">
                                        <input type="text" class="form-control" name="admno" value="<?php echo$admno;?>"placeholder="Admission Number" required>
                                    </div>
								<div class="form-group">
									<input type="text" class="form-control" name="nemis" value="<?php echo$nemis;?>"placeholder="NEMIS" required>
								</div>
								<div class="form-group">
									<select name="class" class="form-control" value="<?php echo$class;?>"required>
                                    
                                        <option value="1North">Form 1 North</option>
                                        <option value="1South">Form 1 South</option>
                                        <option value="2North">Form 2 North</option>
                                        <option value="2South">Form 2 South</option>
                                        <option value="3North">Form 3 North</option>
                                        <option value="3South">Form 3 South</option>
                                        <option value="4North">Form 4 North</option>
                                        <option value="4South">Form 4 South</option>
									
									</select>
								</div>
									
								
								
								<div class="form-group">
									<button type="submit" class="btn btn-success btn-block m-b-30 m-t-30"  name="submit">Save</button>
								</div>
			
							</form>
                        <footer class="twt-footer">
                            
                        </footer>
                    </section>
                </div>
        </div>
    </div>
</div>


<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
                    
	</body>
	
</html>
<?php
  include('connect.php');
  if(isset($_POST['submit'])){
     $uname=$_POST['name'];
     $uyearofadm=$_POST['yearofadm'];
     $uadmno=$_POST['admno'];
     $unemis=$_POST['nemis'];
     $uclass=$_POST['class'];
     $queryupdate=mysqli_query($conn,"update students set name='$uname',yearofadm='$uyearofadm',admno='$uadmno',nemis='$unemis',class='$uclass' where id='$id'")or die(mysqli_error($conn));
     if($queryupdate){
        echo'<script>window.alert("Student record updated successfully")</script>';
        header('refresh:0;url=viewstudent.php');
        } else{
        echo'<script>window.alert("Student record not updated. Please try again.")</script>';
        header('refresh:0;url=studentchange.php');			
        }
  }
?>
