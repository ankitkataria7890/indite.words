<?php
session_start();
header("Refresh:  300;url='REDIRECTION URI'");
$username=$_SESSION['username'];
$fname=$_POST['firstname'];
$lname=$_POST['firstname'];
$email=$_POST['email'];
$suggestion=$_POST['suggest'];
include 'database.php';
$i="insert into suggestion (username,fname,lname,email,suggestion) values ('$username','$fname','$lname','$email','$suggestion')";
$ic=mysqli_query($con,$i);
mysqli_close($con);
if(!$ic)
{
echo " 
<script> 
alert('Not sent'); 
window.location.replace('suggestion.php');
</script>";
}
echo " 
<script> 
alert('sent successfully'); 
window.location.replace('index.php');
</script>";
}
?>
