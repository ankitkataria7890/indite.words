<?php
session_start();
$username=$_SESSION['username'];
$name=$_POST['name'];
$des=$_POST['desc'];
$hobby=$_POST['hobby'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$con= mysqli_connect('localhost','root','','dbsignup');
if(!$con){
die('not connected');}
$desc=mysqli_real_escape_string($con,$_POST['desc']);
$e = "SELECT * FROM editaccount where username='$username'"; 
$ec=mysqli_query($con,$e);
$ecr=mysqli_num_rows($ec);
if($ecr==1){
$u="delete from editaccount where username='$username'";
$uc=mysqli_query($con,$u);

}


$r = "INSERT INTO editaccount (username,name,description,hobby,email,gender) VALUES('$username','$name','$desc','$hobby','$email','$gender')"; 
$rc=mysqli_query($con,$r);



mysqli_close($con);
header('Location: http://indite.herokuapp.com/editaccount.php');
?>