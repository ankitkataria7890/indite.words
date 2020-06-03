<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();
$username=$_SESSION['username'];
$i=0;
while($i<1){
 
  echo "<script>
            location.reload(true);          
     </script>";
 $i++;
}
$host='sql12.freesqldatabase.com';
$dbuser='sql12345161';
$dbpassword='3dqYuAVkkt';
$dbname='sql12345161';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(!$con){
die('not connected');}
$s="select * from content where username='$username'";
$t=mysqli_query($con,$s);
$n=mysqli_num_rows($t);
if($n==0){
 echo "<script>
             alert('Save First Something'); 
              
     </script>";}?>
<!DOCTYPE html>
<html>
<head>

<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-auto-rows:270px;
  grid-gap:15px;
  background-color:white;
padding-left:50px;
padding-right:50px;
padding-top:10px;
  height:50px;
}

.grid-container > div {
  background-color:rgba(198,204,212,1);
  text-align: center;
  font-size: 20px;
  overflow:hidden;
  padding:5px;
}
input {
border:0px solid  blue;
color:white;
margin:20px;
background-color:rgba(198,204,212,1);
}
input:hover {
border:1px solid  white;
border-radius:10px;
color:red;
margin:20px;
background-color:white;
cursor:pointer;
}
</style>
</head>
<body>
<div class="grid-container">
  <?php
  for($i=1;$i<=$n;$i++)
    {$res=mysqli_fetch_array($t);
     $date=$res['date'];
    $text=$res['textarea'];
    $color=$res['fontcolor'];
    $bg=$res['bgcolor'];
    ?>
  <form id="content"  action="yourcontent.php" style="display:none" method="post" ></form>
    <div style="color:<?php echo $color;?>;background-color:<?php echo $bg;?>">
  <dfn title="Tap to View"><input type="submit" style="background-color:<?php echo $bg;?>" id="consubmit" form="content"  name="content"  value="<?php echo $date;?>"></dfn><br><?php echo $text; ?>

</div>
   <?php
     }
    ?>
</div>
<?php mysqli_close($con); ?>

</body>
</html>
