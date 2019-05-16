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
                        <a href=""> <i class="menu-icon fa fa-dashboard"></i>Me.report Admin</a>
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
                   
                </div>

                <div class="col-sm-5">
                    

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

            <div class="row" >
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                 <div class = "col-sm-6">
                     <div class="container-fluid">
                     <h4 class="text-success">STUDENTS' DETAILS</h4>
                     <hr>
                        <div class="col-sm-12">
                            
                            <div class="card card-body">
                        
                            <a href="addstudent.html"><button style="border-color:black" class="btn-block btn-success form-control">Add Student Details</button></a>
                            </div>
                            <hr>
                        </div>

                        <div class = "col-sm-12">
                            
                            <div class="card card-body">
                        
                            <a href="viewstudent.php"><button style="border-color:black" class="btn-block btn-success form-control">View Student Details</button></a>
                            </div>
                            <hr>
                        </div>
                        </div>
                        
                    <div class="container-fluid">
                        <h4 class="text-danger">RESULTS</h4>
                        <hr>
                        <div class = "col-sm-12">
                            <div class="card card-body">
                            <a href="update.php"><button style="border-color:black" class="btn-block btn-danger form-control">Update Results</button></a>
                            </div>
                            <hr>
                        </div> 
                        
                        <div class = "col-sm-12"> 
                            <div class="card card-body">
                            <a href="view.php"><button style="border-color:black" class="btn-block btn-danger form-control">View Results</button></a>
                            </div>
                        
                            <hr>
                        </div>
                
                </div>
            </div>
                <div class="col-sm-6">
                    <div class="container-fluid">
                        <h4 class="text-info">TEACHERS' DETAILS</h4>
                        <div class = "col-sm-12"> 
                            <hr>
                            <div class="card card-body">
                            <a href="addteacher.html"><button style="border-color:black" class="btn-block btn-info form-control">Add Teacher Details</button></a>
                            </div>
                            <hr>
                        </div>
                        <div class = "col-sm-12"> 
                            <div class="card card-body">
                            <a href="viewteacher.php"><button style="border-color:black" class="btn-block btn-info form-control">View Teacher Details</button></a>
                            </div>
                            <hr>
                        </div>
                        </div>

                        <div class="container-fluid">
                        <h4 class="text-secondary">TERM DATES</h4>
                        <div class = "col-sm-12"> 
                            <hr>
                            <div class="card card-body">
                                <a href="#" class=" " data-toggle="dropdown"  aria-expanded="false">
                                    <button style="border-color:black" class="btn-block btn-secondary form-control dropdown-toggle ">Add Term Dates</button>
                                </a>
                            
                                    <div class="user-menu dropdown-menu">
                                    <a class="nav-link" href="dates.html"><i class="fa fa-plus-circle"></i>Term 1</a>

                                    <a class="nav-link" href="dates1.html"><i class="fa fa-plus-circle"></i> Term 2 </a>

                                    <a class="nav-link" href="dates2.html"><i class="fa fa-plus-circle"></i> Term 3</a>
                                </div>
                        </div>
                            <hr>
                        </div>
                        <div class = "col-sm-12"> 
                            <div class="card card-body">
                            <a href="viewdates.php"><button style="border-color:black" class="btn-block btn-secondary form-control">View Term Dates</button></a>
                            </div>
                            <hr>
                        </div>
                        </div>
                </div>
                <div class="col-sm-2"></div>
                </div>
                
                </div>
        
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
