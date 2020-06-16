<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$fullname=$_POST['fullname'];
$recoverpassword=$_POST['recoverpassword'];
include 'database.php';
mysqli_select_db($con,$dbname);
$r="select * from registration where username='$username' && password='$password'";
$h=mysqli_query($con,$r);
$num=mysqli_num_rows($h);
if($num==0){
$q="insert into  registration (username,password,fullname,recoverpassword) values ('$username','$password','$fullname','$recoverpassword')";
$z=mysqli_query($con,$q);
mysqli_close($con);
 if($z){
 echo "<script>
             alert('Account successful registered');  
  location.replace('https://indite.herokuapp.com/login.php');   
  </script>";
}
}
 echo "<script>
             alert('Username OR Password Exist//n Fill Another Credentials');  
 location.replace('https://indite.herokuapp.com/signu.php'); 
  </script>";

mysqli_close($con);
?>
