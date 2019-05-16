<?php
  include('connect.php')
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
<title>Me.report | Term Dates</title>
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
        <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="login.html">Login</a></li>
        
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
          <div class="top-menu">
          <nav id="mainav" class="top-menu"> 
          
            <!-- ################################################################################################ -->
            <ul class="clear">
              <li ><a href="index.html">Home</a></li>
             
              <li><a href="login.html">Login</a>
                
              </li>
              
              <li class="active"><a href="termdates.php">Term Dates</a>
                 
              </li>
                
              
              
              
            </ul>
      <!-- ################################################################################################ -->
    </nav>
    </div>
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
      
      
          <div class="panel panel-success">
              <div class="panel panel-body">
                <a href="login.html"><button class="btn-block btn-danger form-control"><i class=" fa fa-lg fa-sign-in"></i>Log in</button></a>
              </div>
            </div>
      
      <div class="sdb_holder">
        
      </div>
      <div class="sdb_holder">
        
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <h2>Term 1 2019</h2>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Event</th>
              <th>Date</th>
              <th>Time</th>
              
            </tr>
          </thead>
          <tbody>
          <?php
              $select="SELECT*FROM term1";
							$select_query=mysqli_query($conn,$select);
							while($row=mysqli_fetch_array($select_query)){
						?>
            <tr>
              <td><?php echo $row['event']?></td>
              <td><?php echo $row['date']?></td>
              <td><?php echo $row['time'] ?></td>
              
            </tr>
            <?php
              }
              ?>
            
          </tbody>
        </table>
      </div>

      <h2>Term 2 2019</h2>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Event</th>
              <th>Date</th>
              <th>Time</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
              $select="SELECT*FROM term2";
              $select_query=mysqli_query($conn,$select);
              while($row=mysqli_fetch_array($select_query)){
                ?>
            <tr>
              <td><?php echo $row ['event']?></td>
              <td><?php echo $row ['date'] ?></td>
              <td><?php echo $row ['time']?></td>
              
            </tr>
            <?php
              }
              ?>
            
          </tbody>
        </table>
      </div>

      <h2>Term 3 2019</h2>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Event</th>
              <th>Date</th>
              <th>Time</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
             $select = "SELECT*FROM term3";
             $select_query=mysqli_query($conn,$select);
             while($row=mysqli_fetch_array($select_query)){

            
            ?>
            <tr>
              <td><?php echo $row ['event'] ?></td>
              <td><?php echo $row ['date'] ?></td>
              <td><?php echo $row ['time'] ?></td>
             
            </tr>
            <?php
             }
            ?>
          </tbody>
        </table>
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