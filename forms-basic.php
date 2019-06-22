<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: main_login.php");
    exit;
}

require_once 'config.php';
 $email= $_SESSION['email'];


//$department =$_POST['Department'];
//$idea = $_POST['Idea'];
//$details =$_POST['details'];
//$statement=$_POST['statement'];
//$team =$_POST['team'];
//$id = $_SESSION['id'];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileto"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    //$imageFileType = $_FILES['file']['type'];
    if($imageFileType != "pdf" && $imageFileType != "ppt" && $imageFileType != "pptx") {
    echo '<script>alert("Sorry, only PDF and PPT files are allowed.")</script>';
}
 else if ($_FILES["fileto"]["size"] > 5000000) {
    echo "<script>alert('Sorry, your file is too large.')</script>";
    
    //header("location:forms-basic.php");
    //exit;
    }
    else if(move_uploaded_file($_FILES["fileto"]["tmp_name"], $target_file)){
        $sql = "INSERT INTO projects (email,department,idea,title,statement,details,team,upload,status) VALUES (?,?,?,?,?,?,?, ?,'NEW')";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssssssss", $param_email,$param_department, $param_idea,$param_title, $param_statement, $param_details, $param_team,$param_upload);
            $param_email = $_SESSION['email'];
            $param_department = $_REQUEST['Department'];
            $param_idea = $_REQUEST['Idea'];
			$param_title = $_REQUEST['title'];
            $param_statement = $_REQUEST['statement'];
            $param_details = $_REQUEST['details'];
            $param_team = $_REQUEST['team'];
            $param_upload = $target_file;
            if(mysqli_stmt_execute($stmt)){
                









                
			
               header("location:dashboard.php");
            } else{
                echo "<script>alert('Something went wrong. Please try again.')</script>";
            }
        }
        else{
                echo "<script>alert('Something went wrong. Please try again.')</script>";
            }
            mysqli_stmt_close($stmt);
    }
    else{
        echo "<script>alert('Some error occured. Try again')</script>";
        //header("location:forms-basic.php");
        //exit;
    }
    mysqli_close($link);
}

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRMS Innovation & Incubation Cell</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
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
                <a class="navbar-brand" href="./"><h1><font color="maroon" size="6">SRMS</font></h1></a>
                <!--<a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
				-->
				
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
					 <li>
                        <a href="forms-basic.php"> <i class="menu-icon ti-pencil "></i>Apply Here! </a>
                    </li>
					 <li>
                        <a href="about.html"> <i class="menu-icon ti-hand-point-right "></i>About Us </a>
                    </li>
					 <li>
                        <a href="contact.html"> <i class="menu-icon ti-link "></i>Contact Us </a>
                    </li>
					
                     <li>
                        <a href="help.html"> <i class="menu-icon ti-help-alt "></i>HELP </a>
                    </li>
					 <li>
                        <a href="feedback.html"> <i class="menu-icon ti-comments-smiley"></i>Feedback </a>
                    </li>
					 <li>
                        <a href="srms.html"> <i class="menu-icon ti-rss-alt"></i>SRMS connect </a>
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
                        
                     <h3><?php echo htmlspecialchars($_SESSION["name"]); ?></h3>   

                        

                        
                    </div>
                </div>

                
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-center">
                    <div class="page-title">
                        <h1><font color="maroon" size="6">SRMS</font> Innovation & Incubation Cell</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


               

                  

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Apply Here</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                      
                    
                      
                    
                          
                         
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="Department" class=" form-control-label">Department :</label></div>
                            <div class="col-12 col-md-9">
                              <select name="Department"  id="select" class="form-control">
                                <option value="">Department</option>
						                <option>Computer Science & Engineering</option>	
										<option>Information Technology</option>
										<option>Electronics & Communication</option>
										<option>Electrical & Electronics Engineering</option>
										<option>Mechanical Engineering</option>
										<option>Pharmacy</option>
										<option>Medical Science</option>
                              </select>
                            </div>
                          </div>   
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="Department" class=" form-control-label">Stage Of Idea :</label></div>
                            <div class="col-12 col-md-9">
                              <select name="Idea"  id="select" class="form-control">
                                <option value="">Stage Of Idea</option>
						               	<option>Idea Stage</option>	
										<option>Prototype Ready</option>
										<option>Market Ready</option>
										<option>Other</option>
                              </select>
                            </div>
                          </div> 
						    <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Project Title:</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="title"  required placeholder="Project Title" class="form-control"></div>
                          </div>
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Introductory Project Statement:</label></div>
                            <div class="col-12 col-md-9"><textarea name="statement" value=""id="textarea-input" rows="3"required placeholder="Max 250 words..." class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Detailed Project Statement:</label></div>
                            <div class="col-12 col-md-9"><textarea name="details" value=""id="textarea-input" required rows="3" placeholder="Max 500 words..." class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label" required>Core Team Members With Brief Profile* :</label></div>
                            <div class="col-12 col-md-9"><textarea name="team" value=""id="textarea-input" required rows="3" placeholder="Max 100 words..." class="form-control"></textarea></div>
                          </div>
                          
                          
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label" required>File input<font size="2">(PDF/PPT max file size 5MB)</font>*</label></div>
                            <div class="col-12 col-md-4"><input type="file"  name="fileto" class="form-control-file"></div>
                          </div>
                                <div class="card-footer">
                        <button type="submit" value="submit"class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
						
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
					  </center>
                    </div>
                        </form>
                      </div>
					  <center>
					 
                    

                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
