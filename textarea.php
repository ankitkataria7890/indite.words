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
  include 'database.php';
  if(!$con){
die('not connected');
}
$r="select * from registration where username='$username'";
$h=mysqli_query($con,$r);
$num=mysqli_num_rows($h);
    if($num==1){
$q="INSERT INTO content". "(textarea,username,date,fontstyle,text_size,fontcolor,bgcolor)". "VALUES('$textarea','$username',NOW(),'$fs','$ts','$fc','$bc')";
$i=mysqli_query($con,$q);
      $pq="INSERT INTO postdata". "(textarea,username,date,fontstyle,text_size,fontcolor,bgcolor)". "VALUES('$textarea','$username',NOW(),'$fs','$ts','$fc','$bc')";
$pi=mysqli_query($con,$pq);
echo"<script>
location.replace('https://indite.herokuapp.com/write.php?');
</script>";}


 if($num==0){ 

  echo "<script>
             alert('Account Not Exist \\nPlease SIGNUP'); 
              location.replace('https://indite.herokuapp.com/signu.php?');

     </script>";}
mysqli_close($con);
}
?>
