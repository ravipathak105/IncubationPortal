<?php 
session_start();
include 'config.php';
if(isset($_POST['submit']))
{
	$_SESSION['email']= $email=$_POST['email'];
	$pass=$_POST['password'];
    $query="select * from admin where email='$email'";
    $res=mysqli_query($link,$query);
    if(mysqli_num_rows($res)>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
        	$pass1=$row['password'];
        	$_SESSION['name']=$name=$row['name'];

        }
        if($pass==$pass1)
        {
             header('location:admindashboard.php');
        }
        else
        	 echo "<script>alert('We have Identified you Dear Admin, but your Password is wrong');location.href='Adminlogin.html';</script>";


    }
    echo "<script>alert('No Such Admin Exist');location.href='Adminlogin.html';</script>";
}

?>