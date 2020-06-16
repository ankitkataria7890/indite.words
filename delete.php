<?php

session_start();
header("Refresh:  300;url='REDIRECTION URI'");
$post=$_POST['user_delete'];
if($post){
$username=$_SESSION['username'];
$date=$_SESSION['savedate'];
include 'database.php';
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
