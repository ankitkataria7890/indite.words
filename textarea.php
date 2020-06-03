<?php
session_start();
$username=$_SESSION['username'];
$save=$_POST['submit'];
$date=date('Y-m-d H:i:s');
$fs=$_POST['fontstyle'];
$ts=$_POST['textsize'];
$fc=$_POST['fontcolor'];
$bc=$_POST['bgcolor'];
if($save){
$textarea=$_POST['text'];
$username=$_SESSION['username'];
$host='sql12.freesqldatabase.com';
$dbuser='sql12345161';
$dbpassword='3dqYuAVkkt';
$dbname='sql12345161';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
  if(!$con){
die('not connected');
}
$r="select * from registration where username='$username'";
$h=mysqli_query($con,$r);
$num=mysqli_num_rows($h);
    if($num==1){
$q="INSERT INTO content". "(textarea,username,date,fontstyle,text_size,fontcolor,bgcolor)". "VALUES('$textarea','$username',NOW(),'$fs','$ts','$fc','$bc')";
$i=mysqli_query($con,$q);
echo"<script> window.history.back(1);
</script>";}


 if($num==0){ 

  echo "<script>
             alert('Account Not Exist \\nPlease SIGNUP'); 
               window.location.href='http://indite.herokuapp.com/signu.php';
     </script>";}
mysqli_close($con);
}
?>
