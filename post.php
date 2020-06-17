<?php
session_start();
$post=$_POST['user_post'];
header("Refresh:600;url='REDIRECTION URI'");
if($post){
$username=$_SESSION['username'];
$date=$_SESSION['savedate'];
include 'database.php';
if(!$con){
die('not connected');}
$q="INSERT INTO post". "(username,date)". "VALUES('$username','$date')";
$i=mysqli_query($con,$q);
mysqli_close($con);
}
/*$s="select * from postdata where username='$username' && date='$date'";
$sc=mysqli_query($con,$s);
$snc=mysqli_num_rows($sc);
 
$sf=mysqli_fetch_array($sc);
$textarea=$sf['textarea'];
  $fontstyle=$sf['fontstyle'];
  $fontcolor=$sf['fontcolor'];
  $text_size=$sf['text_size'];
  $bgcolor=$sf['bgcolor'];
  
$si="INSERT INTO post". "(username,textarea,date,fontstyle,fontcolor,text_size,bgcolor)". "VALUES('$username','$textarea','$date','$fontstyle','$fontcolor','$text_size','$bgcolor')";
$sic=mysqli_query($con,$q);
}
$ff= "INSERT INTO post(username,date,textarea,fontstyle,fontcolor,text_size,bgcolor) SELECT username,date,textarea,fontstyle,fontcolor,text_size,bgcolor FROM content WHERE username='$username'&& date='$date'";
$ffc=mysqli_query($con,$ff);*/

echo" <script>
window.location.replace('index.php?');
</script>";

?>
