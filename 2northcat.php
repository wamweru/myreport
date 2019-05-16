<?php
  include('connect.php');
  include('login2north.php');
  $nemis=$_SESSION['nemis'];
  $name=$_SESSION['name'];
  //$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<!--
Template Name: Cytocean
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>My.report | Log In</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="layout/styles/bootstrap/css/bootstrap.css"/>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="logout.php"><i class="fa fa-lg fa-sign-out"></i></a></li>
        <li><a href="logout.php">Logout</a></li>
        
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo"> 
      <!-- ################################################################################################ -->
      <h1><a href="index.html">My.report</a></h1>
            
            <!-- ################################################################################################ -->
            
          </div>
          <nav id="mainav" class="clear"> 
            <!-- ################################################################################################ -->
            <ul class="clear">
              <li ><a href="index.html">Home</a></li>
              
              <li class="active"><a href="logout.php">Logout</a>
                
              </li>
              
              <li ><a  href="termdates.php">Term Dates</a>
                  
              </li>
                
              
              
              
            </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  
    <!-- ################################################################################################ -->
  
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
     
      <nav class="sdb_holder">
        
      </nav>
      <div class="sdb_holder">
        
      </div>
      <div class="sdb_holder">
        <div class="panel panel-success">

        <h2></h2>
        <p>
         
         
          
        </p>
        </div>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <div class="row">

      <div class="col-sm-8">
      <div class="scrollable">
        <h2 class="text-success"><?php echo $name;?></h2>
        <h3>CAT 1</h3>
        <table class="table">
          <thead>
            <tr>
              <th></th>
              <th>Name</th>
              <th>Mathematics</th>
              <th>English</th>
              <th>Kiswahili</th>
              <th>General Science</th>
              <th>History</th>
              <th>Mean</th>
              <th>Position</th>

          </tr>
          </thead>
          <tbody>
          <?php
          
              $select="SELECT*FROM 2northcat1 WHERE nemis='$nemis'";
							$select_query=mysqli_query($conn,$select);
							while($row=mysqli_fetch_array($select_query)){
						?>
            <tr>
              <td></td>
              <td><?php echo $row['name']?></td>
              <td><?php echo $row['mathematics'] ?></td>
              <td><?php echo $row['english'] ?></td>
              <td><?php echo $row['kiswahili'] ?></td>
              <td><?php echo $row['genscience'] ?></td>
              <td><?php echo $row['sst'] ?></td>
              <td><?php echo $row['mean'] ?></td>
              <td><?php echo $row['position'] ?></td>
            </tr>
            
            <?php
              }
              ?>
            
          </tbody>
        </table>
      </div>
      <div class="col-sm-2"></div>
  </div>
  </div>
  </div>
      
      
      

      
     
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
    

    <div class="one_third">
      <h6 class="heading">My.Report</h6>
      <nav>
        <ul class="nospace">
          <li><a href="index.html"><i class="fa fa-lg fa-home"></i>Home</a></li>
         
          <li><a href="login.html">Log in</a></li>
          <li><a href="termdates.php">Term Dates</a></li>
          
          
        </ul>
      </nav>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    
    
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
   
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="#">Domain Name</a></p>
      
      
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>