<?php
include 'config.php';

if(isset($_GET['value']))
    
$email=$_GET['email'];
$status=$_GET['status'];
$pid=$_GET['pid'];
    if($status==1)
    {
        $query="update projects set status='APPROVED' where email='$email' and pid='$pid'";
        $res=mysqli_query($link,$query);
        if($res)
            {
                echo "<script>alert('Project is Approved.');location.href='adminvisitprojects.php?email=$email';</script>";
           }
           else
            echo "<script>alert('Due to Some Technical Error, Status of the Project couldn't have been Updated');location.href='adminvisitprojects.php?email=$email';</script>";
    }
    else if($status==0)
    {
        $query="update projects set status='WAITING' where email='$email' and pid='$pid'";
        $res=mysqli_query($link,$query);
        if($res)
            {
                echo "<script>alert('Project is Waiting');location.href='adminvisitprojects.php?email=$email';</script>";
           }
           else
            echo "<script>alert('Due to Some Technical Error, Status of the Project couldn't have been Updated');location.href='adminvisitprojects.php?email=$email';</script>";
    }
    if($status==-1)
    {
        $query="update projects set status='DENIED' where email='$email' and pid='$pid'";
        $res=mysqli_query($link,$query);
        if($res)
            {
                echo "<script>alert('Project is DENIED');location.href='adminvisitprojects.php?email=$email';</script>";
           }
           else
            echo "<script>alert('Due to Some Technical Error, Status of the Project couldn't have been Updated');location.href='adminvisitprojects.php?email=$email';</script>";
    }

?>