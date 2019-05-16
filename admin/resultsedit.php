<?php
include('connect.php');

	$id=$_GET['id'];
	$query="SELECT*FROM form1 where id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
		
            $id1=$row['id'];
            $name=$row['name'];
            $admno=$row['admno'];
            $class=$row['class'];
            $mathematics=$row['mathematics'];
            $english=$row['english'];
            $kiswahili=$row['kiswahili'];
            $science=$row['science'];
            $socialstudies=$row['socialstudies'];

	}
	
?>

<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My.Report | Form 1 Results Update</title>
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
								<h3>Results</h3>
								<hr>
								<div class="form-group">
									<input type="text" class="form-control" name="name" value="<?php echo$name;?>"required>
								</div>
								
                                <div class="form-group">
                                        <input type="text" class="form-control" name="admno" value="<?php echo$admno;?>"required>
                                    </div>
                                
								
								
								<div class="form-group">
									<input type="text" name="class" class="form-control" value="<?php echo$class;?> "required>
										
                                </div>
                                <div class="form-group">
                                    <label>Mathematics</label>
                                    <input type="text" name="mathematics" class="form-control" value="<?php echo$mathematics;?>" placeholder="Mathematics">
                                </div>
                                <div class="form-group">
                                <label>English</label>
                                    <input type="text" name="english" class="form-control" value="<?php echo$english;?>"placeholder="English">
                                </div>
                                <div class="form-group">
                                <label>Kiswahili</label>
                                    <input type="text" name="kiswahili" class="form-control" value="<?php echo$kiswahili;?>" placeholder="Kiswahili">
                                </div>
                                <div class="form-group">
                                <label>Science</label>
                                    <input type="text" name="science" class="form-control" value="<?php echo$science;?>" placeholder="Science">
                                </div>
                                <div class="form-group">
                                <label>Social Studies</label>
                                    <input type="text" name="socialstudies" class="form-control" value="<?php echo$socialstudies;?>" placeholder="Social Studies">
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
    $uadmno=$_POST['admno'];
    $uclass=$_POST['class'];
    $umathematics=$_POST['mathematics'];
    $uenglish=$_POST['english'];
    $ukiswahili=$_POST['kiswahili'];
    $uscience=$_POST['science'];
    $usocialstudies=$_POST['socialstudies'];

     
     $queryupdate=mysqli_query($conn,"update form1 set name='$uname',admno='$uadmno',class='$uclass',mathematics='$umathematics',english='$uenglish',kiswahili='$ukiswahili',science='$science',socialstudies='$usocialstudies' where id='$id'")or die(mysqli_error($conn));
     if($queryupdate){
         ?>
            <script>alert("Results changed");
			window.location.href='form1.php';
			</script>
		<?php
        } else{
            ?>
            <script>alert("Results not changed!!,Try again");
            window.location.href='resultsedit.php';
            </script>
            <?php	
        }
  }
?>
