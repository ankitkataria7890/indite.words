<?php
session_start();
$show = $_POST['display'];
header("Refresh:  300;url='REDIRECTION URI'");
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
echo "<script>  
 window.location.replace('display.php?');   
  </script>";
}
?>
