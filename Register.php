<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
  echo "Not Connected";
}
if(!mysqli_select_db($con,'Incubation Portal'))
{
  echo "Database not selected";
 }
 $Full_Name = mysqli_real_escape_string ($con,$_POST['Full_Name']);
 $Email    = mysqli_real_escape_string ($con,$_POST['Email']);
 $Password = mysqli_real_escape_string ($con,$_POST['Password']);
 


 $q=" SELECT * FROM register where Email = '$Email' && Password = '$Password'";
 $result=mysqli_query($con,$q);
 $num = mysqli_num_rows($result);

 if($num==3)
 {

	 echo "You Have Signed Up Already";

 }
 else if($num==3)
 {
	 
	 echo "Email Already exits Try with another email";
 }	 
else
 {
	 $qy="INSERT INTO register(Full_Name,Email,Password) VALUES('$Full_Name','$Email','$Password')";
	 mysqli_query($con,$qy);
	  echo "You Have Successfully Signed Up <script>alert('Please Login After Sign Up')</script>";
 }




header('refresh:1;url=index.html');
 ?>
