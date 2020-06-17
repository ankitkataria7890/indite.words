<?php
session_start();
header("Refresh:  300;url='REDIRECTION URI'");
$username=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$suggestion=$_POST['suggestion'];
include 'database.php';
$i="insert into suggestion (username,name,email,suggestion) values ('$username','$name','$email','$suggestion')";
$ic=mysqli_query($con,$i);
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
