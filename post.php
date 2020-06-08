<?php
session_start();
$post=$_POST['user_post'];
header("Refresh:  300;url='REDIRECTION URI'");
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
$q="INSERT INTO post". "(username,postdate)". "VALUES('$username','$date')";
$i=mysqli_query($con,$q);
$s="select * from content where username='$username' && date='$date'";
$sc=mysqli_query($con,$s);
$snc=mysqli_num_rows($sc);
 
$sf=mysqli_fetch_array($sc);
$textarea=$sf['textarea'];
  $fontstyle=$sf['fontstyle'];
  $fontcolor=$sf['fontcolor'];
  $text_size=$sf['text_size'];
  $bgcolor=$sf['bgcolor'];
  
$si="INSERT INTO postdata". "(username,textarea,date,fontstyle,fontcolor,text_size,bgcolor)". "VALUES('$username','$textarea','$date','$fontstyle','$fontcolor','$text_size','$bgcolor')";
$sic=mysqli_query($con,$q);
}
echo" <script>
window.location.replace('index.php?');
</script>";
?>
