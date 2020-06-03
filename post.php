<?php
session_start();
$post=$_POST['user_post'];
if($post){
$username=$_SESSION['username'];
$date=$_SESSION['savedate'];
$username=$_SESSION['username'];
$host='sql12.freesqldatabase.com';
$dbuser='sql12345161';
$dbpassword='3dqYuAVkkt';
$dbname='sql12345161';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(!$con){
die('not connected');}
$q="INSERT INTO post". "(username,postdate)". "VALUES('$username','$date')";
$i=mysqli_query($con,$q);
}
header('Location: http://indite.herokuapp.com/index.php');
?>
