<?php
session_start();
$show = $_POST['display'];
header("Refresh:  300;url='REDIRECTION URI'");
if($show){
$username=$_SESSION['username'];
include 'database.php';

if(!$con){
die('not connected');}
mysqli_close($con);
echo "<script>  
 window.location.replace('display.php?');   
  </script>";
}
?>
