<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$fullname=$_POST['fullname'];
$recoverpassword=$_POST['recoverpassword'];
$con=mysqli_connect('sql12.freesqldatabase.com','sql12345161','3dqYuAVkkt','sql12345161');
mysqli_select_db($con,'sql12345161');
$r="select * from registration where username='$username' && password='$password'";
$h=mysqli_query($con,$r);
$num=mysqli_num_rows($h);
if($num==0){
$q="insert into  registration (username,password,fullname,recoverpassword) values ('$username','$password','$fullname','$recoverpassword')";
mysqli_query($con,$q);
mysqli_close($con);
window.location.href='indite.herokuapp.com/login.php';
 
     }
 echo "<script>
             alert('Username OR Password Exist//n Fill Another Credentials');  
  window.history.back();   
  </script>";

mysqli_close($con);
?>
