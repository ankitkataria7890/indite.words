<?php
session_start();
$post=$_POST['user_post'];
if($post){
$username=$_SESSION['username'];
$date=$_SESSION['savedate'];
$con= mysqli_connect('localhost','root','','dbsignup');
if(!$con){
die('not connected');}
$q="INSERT INTO post". "(username,postdate)". "VALUES('$username','$date')";
$i=mysqli_query($con,$q);
}
header('Location: http://indite.herokuapp.com/index.php');
?>