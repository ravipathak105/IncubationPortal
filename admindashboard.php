<?php
session_start();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><p><br><font color="maroon" size="8">SRMS</font><br>INNOVATION & INCUBATION </p></a>
                <!--<a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
				-->
				
            </div>
			
			
			
			
			
			
			
			
			

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
				
				 <li>
                        <a href="admindashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Admin Dashboard </a>
                    </li>
                    
					 <li>
                        <a href="about.html"> <i class="menu-icon ti-hand-point-right "></i>About Us </a>
                    </li>
					 <li>
                        <a href="contact.html"> <i class="menu-icon ti-link "></i>Contact Us </a>
                    </li>
					
                    
					 <li>
                        <a href="feedback.html"> <i class="menu-icon ti-comments-smiley"></i>Feedback </a>
                    </li>
					 <li>
                        <a href="https://www.srms.ac.in"> <i class="menu-icon ti-rss-alt"></i>SRMS connect </a>
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
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        
                     <h3>Welcome Admin <?php echo $_SESSION['name']; ?></h3>   

                        

                        
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                      
<a href="logout.php"class="btn btn-danger btn-sm active"> Logout</a>&emsp;<a href="admin_changepwd.php" class="btn btn-info btn-sm active"> Change Password</a>
                     
                    </div>

                 

                </div>
            </div>
                       
                       
                        


                      

                
           

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><font color="maroon" size="6">SRMS</font> Innovation & Incubation Cell</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		
		
		 <div class="content mt-3">
		
		 <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                       
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Approved Projects</p>


                    </div>

                </div>
            </div>
			
			<div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                       
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Projects Waiting</p>


                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                       
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Projects Rejected</p>

                    </div>

                        
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                       
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">New Projects</p>

                        

                    </div>
                </div>
            </div>

		
		
		
		
		
		
		
	<div class="table-responsive">
<table class="table table-hover table-stripped table-bordered"border="1">
	<tr>
	<th>S.No.</th>
	<th>Project Title</th>	
	<th>Email</th>	
	<th>Department</th>
	<th >Status</th>
	
	</tr>

           <?php
           include 'config.php';
$query="select * from projects";
$res=mysqli_query($link,$query);
if(mysqli_num_rows($res))
{
	$i=1;
	 while ($row=mysqli_fetch_assoc($res)) {
 	 	# code...
 	 	
 	
 	 ?><td><?php echo ($i++); ?></td>
	 <td><a href="adminvisitprojects.php?email=<?php echo $row['email'];?>"><font color="red"><u><?php echo $row['title']; ?></u></font></a></td>
 	 <td><?php echo $row['email']; ?></td> 	 
 	 <td><?php echo $row['department']; ?></td>
 	 <td><font color="blue"><?php echo $row['status']; ?></font></td>
 	
 	 
</tr>
 	 <?php }
 	 
 	}

           ?>
         

</table>
</div>
       
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
