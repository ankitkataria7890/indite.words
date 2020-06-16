<?php  
session_start();

$username=$_POST['username'];
$password=$_POST['password'];
include 'database.php';
if(!$con){
die('Not Connected to Server');
}
else{
$r="select * from registration where username='$username' && password='$password'";
$h=mysqli_query($con,$r);
$num=mysqli_num_rows($h);
if($num==0){
  echo "<script>
             alert('Account Not Exist \\nPlease SIGNUP');
             location.replace('https://indite.herokuapp.com/signu.php');
              
     </script>";
     
mysqli_close($con);
}
else{
$_SESSION['username']=$username;
  
               header('Location:http://indite.herokuapp.com/index.php');
     
mysqli_close($con);
}
}
?>
