<?php
include('connect.php');

	$id=$_GET['id'];
	$query="SELECT*FROM students where id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
		$id1=$row['id'];
		$name=$row['name'];
		$admno=$row['admno'];
        $class=$row['class'];
	}
	
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Me.report | Admin</title>
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

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                       
                    </a>
                </div>

                <div class="login-form">
						<form class="form-horizontal" method="POST" action="add.php">
								<h3>Results</h3>
								<hr>
								<div class="form-group">
									<input type="text" class="form-control" name="name" value="<?php echo $name;?>" placeholder="Student name here" required>
								</div>
								
                                <div class="form-group">
                                        <input type="text" class="form-control" name="admno" value="<?php echo $admno;?>" placeholder="Admission Number" required>
                                    </div>
                                
								
								
								<div class="form-group">
									<input type="text" name="class" class="form-control" value="<?php echo$class;?>"required>
										
                                </div>
                                <div class="form-group">
                                    <input type="text" name="mathematics" class="form-control" placeholder="Mathematics">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="english" class="form-control" placeholder="English">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="kiswahili" class="form-control" placeholder="Kiswahili">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="science" class="form-control" placeholder="Science">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="socialstudies" class="form-control" placeholder="Social Studies">
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

</html>
