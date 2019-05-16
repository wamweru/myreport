<?php
  include('connect.php')
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
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href=""> <i class="menu-icon fa fa-dashboard"></i>My.report Admin</a>
                    </li>
                    <li>
                    <h3 class="menu-title"></h3><!-- /.menu-title -->
                    <div class="user-area dropdown float-left">
                        
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        
                        </a>

                        
                    </div>
                    </li>
                    <li>
                    </li>
                    <li>
                    <a href="adminlogout.php"><button class="btn-block btn-danger form-control"><i class=" fa fa-lg fa-sign-out"></i>Log Out</button></a>
                    <a href="science1north.html"><button class="btn-block btn-success form-control">Back</button></a>
                    </li>   
                
                    
                    

                    

                   
                   
                   

                   
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                   <h2>1 North</h2>
                </div>

                <div class="col-sm-5">
                    

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            
            
            <h3>CAT 1</h3>
      <div class="scrollable">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>NEMIS</th>
              <th>General Science</th>
              
              
              

              
            </tr>
          </thead>
          <tbody>
          <?php
              $select="SELECT*FROM 1northcat1";
							$select_query=mysqli_query($conn,$select);
							while($row=mysqli_fetch_array($select_query)){
						?>
            <tr>
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['name']?></td>
              <td><?php echo $row['nemis']?></td>
              <td><?php echo $row['genscience'] ?></td>
             
            </tr>
            
            <?php
              }
              ?>
            
          </tbody>
        </table>
      </div>

      

      
      
      <!-- #############################################################
               
                
        
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>


