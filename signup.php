<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$fullname=$_POST['fullname'];
$recoverpassword=$_POST['recoverpassword'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dbsignup');
$r="select * from registration where username='$username' && password='$password'";
$h=mysqli_query($con,$r);
$num=mysqli_num_rows($h);
if($num==0){
$q="insert into  registration (username,password,fullname,recoverpassword) values ('$username','$password','$fullname','$recoverpassword')";
mysqli_query($con,$q);
mysqli_close($con);
header('Location: http://indite.herokuapp.com/login.php');
 
     }
 echo "<script>
             alert('Username OR Password Exist//n Fill Another Credentials');  
  window.history.back();   
  </script>";

mysqli_close($con);
?>