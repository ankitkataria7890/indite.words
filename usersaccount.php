<?php
session_start();
if(!isset($_SESSION['username']))
header('Location: http://indite.herokuapp.com/login.php');
?>

<?php

$username=$_POST['myCountry'];
$_SESSION['users']=$username;
$con= mysqli_connect('localhost','root','','dbsignup');
if(!$con){
die('not connected');}

$r = "SELECT * FROM image where username='$username'"; 
$rc=mysqli_query($con,$r);
$row = mysqli_fetch_array($rc);

$f="select * from following where username='$username'";
$fo=mysqli_query($con,$f);
$fn=mysqli_num_rows($fo);

$fg="select * from following where followingname='$username'";
$fgc=mysqli_query($con,$fg);
$fgn=mysqli_num_rows($fgc);

$follower=$fgn;
$following=$fn;

$p="select * from post where username='$username'";
$pc=mysqli_query($con,$p);
$pn=mysqli_num_rows($pc);


$e="select * from editaccount where username='$username'";
$ec=mysqli_query($con,$e);
$ef=mysqli_fetch_array($ec);
$name=$ef['name'];
$desc=$ef['description'];
$hobby=$ef['hobby'];
$email=$ef['email'];
$gender=$ef['gender'];

?> 



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

<title><?php echo ucfirst($username);?></title>
<style>
.follow a{
float:right;
font-weight:100;
font-size:20px;
text-decoration:none;
color:rgba(0,0,0,0.5);
margin-right:50px;
margin-top:30px;
padding:5px 8px 5px 2px;
border:1px solid rgba(0,225,0,0.7);
background-color:rgba(0,225,0,0.4);
border-radius:20px;
}
.follow a:hover{
color:rgba(0,225,0,0.4);
background:white;}

#desc{

font-family: 'Tangerine', serif;
font-size:37px;

float:left;
padding-left:20px;
}
h1{
font-weight:bold;
color:blue;
font-family: 'Tangerine', serif;
font-size:50px;
}

#header{
margin:auto;
width:670px;
}
#outbox{
width:670px;
height:450px;
border:0.3px ridge rgba(225,225,225,0.5);
margin-bottom:20px;
display:flex;

}
#profilepic{
max-width:670px;
 max-height:450px;
min-width:325px;
min-height:100px;
margin:auto;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-auto-rows:230px;
  grid-gap:15px;

padding-left:50px;
padding-right:50px;
padding-top:10px;
 

}

.grid-container > div {
  background-color:rgba(198,204,212,1);
  text-align: center;
  font-size: 20px;
  overflow:hidden;
  padding:5px;

}
#post{
margin-left:15%;
margin-right:15%;
height:100%;
}
</style>
</head>
<body>
<span class="follow"><a href="following.php"> &nbsp;&nbsp;FOLLOW</a></span><br>

<div id="header"><center>
<span style="font-size:40px;float:left;margin-left:40px;color:rgba(0,0,0,1);font-family: 'arial', serif;"><b><?php echo $username;?></b></span><span style="float:right;margin:30px 0 0px 40px;">04-07-1999</span>
<div id="outbox">
<img id="profilepic" src="<?php echo 'image/'.$row['filename'];?>" ><br><br>
</div>
<button onclick="openForm()" style="border:0px solid white; background-color:white">Follower</button>
<!--div class="form-popup" id="myForm" style="cursor:context-menu;">
  <form   class="form-container">
  <select name="followername" onfocus="this.size=10;" onblur="this.size=1;"  onchange="this.size=1; this.blur();" >

<//?php while($fo)
{
?>
  <option value="<//?php echo $fog['username'];?>"><//?php  $fog['username'];?></option>
  <//?php } ?>
  </select>
</div-->

<span><?php echo $follower; ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Following  <?php echo $following; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Post <?php echo $pn; ?>
<br><br><br>
<div id="desc" >My name is <b>If<?php $name;?> </b>!<?php echo $desc;?></div><br><br>

<h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skills & Hobbies:</h1>
<?php echo $hobby;?><br>
</center></div>
<br><br><br>
<div style="border:1px solid black;border-width:1px 0 0 0; padding-top:30px;background-color:rgba(225,225,225,0.4);">
<div id ="post">
<div class="grid-container">
  <?php
  for($i=1;$i<=$pn;$i++)
    {
$pf=mysqli_fetch_array($pc);
$date=$pf['postdate'];
$s="select * from content where username='$username'&& date='$date'";
$t=mysqli_query($con,$s);
$res=mysqli_fetch_array($t);
     $date=$res['date'];
    $text=$res['textarea'];
    $color=$res['fontcolor'];
    $bg=$res['bgcolor'];
    ?>
  <form id="content"  action="" style="display:none" method="post" ></form>
    <div style="color:<?php echo $color;?>;background-color:<?php echo $bg;?>">
  <dfn title="Tap to View"><input type="submit" style="background-color:<?php echo $bg;?>" id="consubmit" form="content"  name="content"  value="<?php echo $date;?>"></dfn><br><?php echo $text; ?>

</div>

   <?php
     }
    ?>
</div>
</div>
</div>
</body>

</html>
