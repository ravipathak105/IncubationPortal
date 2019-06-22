<?php
require_once 'config.php';


//$department =$_POST['Department'];
//$idea = $_POST['Idea'];
//$details =$_POST['details'];
//$statement=$_POST['statement'];
//$team =$_POST['team'];
//$id = $_SESSION['id'];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType != "pdf" && $imageFileType != "ppt" && $imageFileType != "pptx") {
    echo '<script>alert("Sorry, only PDF and PPT files are allowed.")</script>';
    
    header("location:forms-basic.php");
    exit;
    }
    else if ($_FILES["file"]["size"] > 5000000) {
    echo "<script>alert('Sorry, your file is too large.')</script>";
    
    header("location:forms-basic.php");
    exit;
    }
    else if(move_uploaded_file($_FILES["file"]["name"], $target_file)){
        $sql = "INSERT INTO projects (id,department,idea,statement,details,team,upload) VALUES (?,?,?,?,?,?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "issssss", $param_id,$param_department, $param_idea, $param_statement, $param_details, $param_team,$param_upload);
            $param_id = $_SESSION['id'];
            $param_department = $_REQUEST['Department'];
            $param_idea = $_REQUEST['Idea'];
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
        header("location:forms-basic.php");
        exit;
    }
    mysqli_close($link);
}
?>