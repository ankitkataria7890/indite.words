<?php 
session_start();
$username=$_SESSION['username'];
$users=$_SESSION['users'];
$con= mysqli_connect('localhost','root','','dbsignup');
if(!$con){
die('not connected');}
$f="select * from following where username='$username' && followingname='$users'";
$fc=mysqli_query($con,$f);
$fn=mysqli_num_rows($fc);
  $com=strcmp($username,$users);
if($com==0){
echo "<script>
    alert('You can't follow yourself');
</script>";}
if($fn==0 && $com!=0){
$fi="INSERT INTO following (username,followingname) values('$username','$users')";
$fic=mysqli_query($con,$fi);
echo "<script>
    alert('You are now follower');
</script>";
}
if($fn==1 && $com!=0){
echo "<script>
    alert('You are already follower');
</script>";}
unset($_SESSION['users']);

mysqli_close($con);
?>