<?php

session_start();
header("Refresh:  300;url='REDIRECTION URI'");
$post=$_POST['user_delete'];
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
$q="DELETE FROM content where username='$username'&& date='$date'";

$i=mysqli_query($con,$q);
}
mysqli_close($con);
echo"<script>
window.location.replace('display.php?');
</script>;"
?>
