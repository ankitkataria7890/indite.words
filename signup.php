<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$fullname=$_POST['fullname'];
$recoverpassword=$_POST['recoverpassword'];
$host='sql12.freesqldatabase.com';
$dbuser='sql12345161';
$dbpassword='3dqYuAVkkt';
$dbname='sql12345161';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
mysqli_select_db($con,$dbname);
$r="select * from registration where username='$username' && password='$password'";
$h=mysqli_query($con,$r);
$num=mysqli_num_rows($h);
if($num==0){
$q="insert into  registration (username,password,fullname,recoverpassword) values ('$username','$password','$fullname','$recoverpassword')";
mysqli_query($con,$q);
mysqli_close($con);
 echo "<script>
             alert('Account successful registered');  
  window.location.href='login.php';   
  </script>";
}
 echo "<script>
             alert('Username OR Password Exist//n Fill Another Credentials');  
  window.history.back();   
  </script>";

mysqli_close($con);
?>
