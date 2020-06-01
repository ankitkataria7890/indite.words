<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();
$post=$_POST['user_delete'];
if($post){
$username=$_SESSION['username'];
$date=$_SESSION['savedate'];
$con= mysqli_connect('localhost','root','','dbsignup');
if(!$con){
die('not connected');}
$q="DELETE FROM content where username='$username'&& date='$date'";
$i=mysqli_query($con,$q);
}
mysqli_close($con);
header('Location: http://indite.herokuapp.com/display.php');
?>