<?php
session_start();
$show = $_POST['display'];
if($show){
$username=$_SESSION['username'];
$host='sql12.freesqldatabase.com';
$dbuser='sql12345161';
$dbpassword='3dqYuAVkkt';
$dbname='sql12345161';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(!$con){
die('not connected');}
mysqli_close($con);
header('Location: http://indite.herokuapp.com/display.php');
}
?>
