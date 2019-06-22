<?php
session_start();
include 'config.php';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRMS INNOVATION AND INCUBATION</title>
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

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/
        html5shiv/3.7.3/html5shiv.min.js"></script> -->
<style type="text/css">
    #view{
        background-color: lightyellow;
        margin: 20px;
        padding: 40px; 

    }
    #srms{
        float: left;
    }
    #name{
        float: right;
    }
    label,dt{
        color: seagreen;
    }
    label{
        font-weight: 500;
    }
    #view dd{
        padding-left: 80px;
        color: coral;
    }
    mark{
        background-color: brown;
        color: cyan;
    }
</style>
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
                        
                     <h3>Admin Dashboard</h3>   

                        

                        
                    </div>
                </div>

                <div class="pull-right">
                 <a href="logout.php"class="btn btn-danger btn-sm active"> Logout</a>
                </div>
            </div>
                       
                       
                        


                      

                
           

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><div id="srms"><font color="maroon" size="6">SRMS</font> Innovation & Incubation Cell</div> </h1>
                    </div>
                </div>
            </div>
            <?php
            $email=$_GET['email'];
$query="select * from users where email='$email'";
$res=mysqli_query($link,$query);
if(mysqli_num_rows($res)>0)
{
         while ($row=mysqli_fetch_assoc($res)) {
        $name=$row['name'];
        $rollno=$row['roll_no'];
         }
     }
        ?>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li> <?php echo $name;?></li>
                            <li> <?php echo $rollno;?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<?php
#include 'config.php';
$email=$_GET['email'];
$query="select * from projects where email='$email'";
$res=mysqli_query($link,$query);
if(mysqli_num_rows($res)>0)
{
    $i=1;
   echo "<ul>";
     while ($row=mysqli_fetch_assoc($res)) {
        # code...
    echo "<div id='view'><li> ";
    
     ?>
<label>Project Id :</label>&emsp;
     <?php echo $pid= $row['pid']; ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <mark><?php echo $row['status']; ?> </mark>  <br>
     <label>Project Title :</label>&emsp;<?php echo $row['title']; ?>
     <br>
    <label>Department :</label>&emsp;<?php echo $row['department']; ?>
     <br>
     <label>Idea :</label>&emsp;<?php echo $row['idea']; ?><br>
     <dt>Statement :</dt>
     <dd><?php echo $row['statement']; ?></dd>
    <dt>Details :</dt> <dd><?php echo $row['details']; ?></dd>
     <dt>Team :</dt><dd><?php echo $row['team']; ?></dd>
     <dd><a class="btn btn-primary btn-sm active" target="_BLANK" href="<?php echo $row['upload']; ?>">View File</a></dd>
     <dt>Status:</dt><dd><a  class="btn btn-success btn-sm active" id="approve" onclick="f()" href="admin_projectstatus.php?value='value'&status=1&email=<?php echo $email;?>&pid=<?php echo $pid;?>">Approve</a>&emsp;&emsp;
     <a class="btn btn-info btn-sm active" href="admin_projectstatus.php?value='value'&status=0&email=<?php echo $email;?>&pid=<?php echo $pid;?>">Waiting</a>&emsp;&emsp;
     <a class="btn btn-danger btn-sm active" href="admin_projectstatus.php?value='value'&status=-1&email=<?php echo $email;?>&pid=<?php echo $pid;?>">Deny</a></dd>
     <?php
     echo "</li></div>";
     }
        echo "</ul>";     
    }

else
echo "<h1>This Student has not given Any Projects</h1>";
?>
       
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
<script type="text/javascript">
    function f()
    { 
        document.getElementById('approve').style.color="red";
       
        //a.style.color='red';
    }
</script>