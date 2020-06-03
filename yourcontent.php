<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();
$username=$_SESSION['username'];
$date=$_POST['content'];
$_SESSION['savedate']=$date;
$host='sql12.freesqldatabase.com';
$dbuser='sql12345161';
$dbpassword='3dqYuAVkkt';
$dbname='sql12345161';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);

if(!$con){
die('not connected');}
$s="select * from content where username='$username' && date='$date'";
$t=mysqli_query($con,$s);
$res=mysqli_fetch_array($t);
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<title>Gallery</title>
<style>
body{
background:white;}
#header{
 
  background: <?php echo $res['bgcolor']; ?>;
  color:<?php echo $res['fontcolor']; ?>;
  font-family:<?php echo $res['fontstyle']; ?>;
  font-size:<?php echo $res['text_size']; ?>;
  padding-left:10px;
  border:8px solid white;
  margin-top:10px;
  height:87%; 
  overflow:auto;
}
#outside{
 max-width: 1000px;
margin:auto;
margin-top:30px;
margin-bottom:30px;
height:700px;

box-shadow:0 10px 10px 0 rgba(0,0,0,0.5), 0 6px 20px 0 rgba(0,0,0,0.5);
padding-top:10px;
}
#like{
padding:10px 40px 30px 40px;
float:left;
}

pre {
    display: block;
    font-family: monospace;
    white-space: pre;
   
}

.material-icons {
color:white;
font-size:40px;}
#share{
color:rgb(0, 122, 153);
float:right;
padding:10px 40px 30px 40px;
}



</style></head>
<body>
<div  id ="outside">
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><b><?php echo strtoupper($res['username']); ?></b>
<span style="float:right; padding-right:30px;"><?php echo $res['date']; ?></span>
<div id="header">
<pre><?php echo $res['textarea']; ?> </pre>
</div>
<form   action="post.php" method="post">
<input style="width: 80px; float: right;  margin-right:3%;margin-top:0.8%; " type="submit" name="user_post" value="post">
</form>
<form   action="delete.php" method="post">
<input style="width: 80px; float: right; margin-right:2%; margin-top:0.8%;" type="submit" name="user_delete" value="delete">
</form>
<form   action="write.php" method="post">
<input style="width: 80px; float: right;  margin-right:2%;margin-top:0.8%; " type="submit" name="edit" value="edit">
</form>
<?php mysqli_close($con); ?>
</body>
</html>
