<?php
session_start();
$show = $_POST['display'];
if($show){
$con= mysqli_connect('localhost','root','','dbsignup');
if(!$con){
die('not connected');}
mysqli_close($con);
header('Location: http://indite.herokuapp.com/display.php');
}
?>