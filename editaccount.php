<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
<?php
session_start();
$username=$_SESSION['username'];
include 'database.php';
if(!$con){
die('not connected');}

$r = "SELECT * FROM image where username='$username'"; 
$rc=mysqli_query($con,$r);
$row = mysqli_fetch_array($rc);

$a = "SELECT * FROM editaccount where username='$username'"; 
$ac=mysqli_query($con,$a);
$res = mysqli_fetch_array($ac);
?>
<style>
.avatar {
  vertical-align: middle;
  width: 200px;
  height: 200px;
  border-radius: 50%;
}

#header{
margin:auto;
width:700px;
padding:5px 20px 20px 20px;
border:5px ridge blue;
border-width:0 0 0 5px;
border-radius:7px;
}
label{
float:left;}
input,textarea,select,option{
width:100%;
padding:10px 10px 10px 10px;}
#gender{
width:50%;
float:left;
padding:10px;}
.footer{
background-color:rgb(19,43,64);
float:left;
padding:30px;
padding-left:50x;
height:100px;
width:100%;}
.footer li a{
text-decoration:none;
padding-right:50px;
color:rgba(225,225,225,0.5);
float:left;
}
</style>
<script>
function validation(){
var  result=true;
var e=document.getElementsByName("email")[0].value;
var atindex=e.indexOf('@');
var dotindex=e.lastIndexOf('.');
var l=e.length;
if(l==0)
{reult=true;}
else{
if(atindex<1||dotindex>= e.length-2||dotindex-atindex<3)
       { result=false;
         alert("Invalid Email");}
}
   return(result);
}
</script>

</head>
<body>
<center>
<br><br> 
<img src="<?php echo '../image/'.$row['filename'];?>" alt="uploading.." style="align:center" class="avatar">
<div id="header">
 <label for="image"><b>&nbsp;Change Profile Photo</b></label>
 <form method="POST" action="uploadprofilepic.php" enctype="multipart/form-data" > 
<input type="file" name="uploadfile" accept="image/*" value="" required> 

			<div> 
				<button type="submit"
						name="upload" style=" float:left;margin-left:10px;width:70px; height:px; padding:0px;"
> 
				UPLOAD 
				</button> 
			</div> 
		</form> 
<br><br>
<form  action="editinsert.php"  method="post" onsubmit="return validation()">
 <label for="username">Username</label><br>
 <input type="text" contenteditable="false" value="<?php echo $username;?>"><br><br>

 <label for="name">Name</label><br>
    <input type="text" placeholder="Your Name" name="name"  value="<?php echo $res['name'];?>" required><br><br>

<label for="desc">Description</label><br>
    <textarea placeholder="Introduce " name="desc" value="" required><?php echo htmlentities($res['description']);?></textarea><br><br>

<label for="hobby">Skills & Hobbies</label><br>
    <input type="textarea" placeholder="what dreams have" name="hobby"  value="<?php echo $res['hobby'];?>" required><br><br>

<label for="email">Email</label><dfn title="OPTIONAL"><br>
    <input type="email" placeholder="Your Email" name="email" value="<?php echo $res['email'];?>" ></dfn><br><br>

<label for="gender">Gender</label><br>
<dfn title="OPTIONAL">
   <select id="gender" name="gender" value="" >
    <option value="<?php echo $res['gender'];?>"><?php echo ucfirst(strtolower($res['gender']));?></option>
    <option value="MALE">Male</option>
     <option value="FEMALE">Female</option>
     <option value="OTHER">Other</option>
 

</select></dfn>
<br><br>

<input type="submit"  name="editprofile" value="Save" style="margin-top:20px;">

</form></div>

</center>
<br><br><br><div class="footer">
<ul style="list-style:none">
<li> <a href="aboutus.php">About Us</a></li>
<li> <a href="faq.php">FAQs</a></li>
<li> <a href="blog.php">Blog</a></li>
<li style="float:right"> <a href="contact.php">Contact</a></li>
<li style="float:right"> <a href="suggestion.php">Suggestion</a></li>
</ul>
<br>
<p style="text-align:center; font-size:12px;">Disclaimer: Legal information is not legal advice , <a href="disclaimer.php"style="color:rgb(153, 204, 255)">Read the disclaimer.</a></p>
<p style="text-align:center; font-size:12px; color:rgba(225,225,225,0.8);"> Copyright c 2020 QTS XYZ, Inc. All rights reserverd. <a href="termsofuse.php" style="color:rgb(153, 204, 255)"> Terms of Use </a>|<a href="privacypolicy.php" style="color:rgb(153, 204, 255)"> Privacy Policy - REVISED</a></p>

</div>

   </body></html>
<?php 
/*error_reporting(0); 
?> 
<?php 
$msg = ""; 

// If upload button is clicked ... 
if (isset($_POST['upload'])) { 

	$filename = $_FILES["uploadfile"]["name"]; 
	$tempname = $_FILES["uploadfile"]["tmp_name"];	 
		$folder = "indite.words/image/".$filename; 
	$username=$_SESSION['username'];
include 'database.php';
	
        $d = "delete from image where username='$username'"; 
         $dl=mysqli_query($con,$d);
		// Get all the submitted data from the form 
		$sql = "INSERT INTO image (username,filename) VALUES ('$username','$filename')"; 

		// Execute query 
		mysqli_query($con, $sql); 
		
		// Now let's move the uploaded image into the folder: image 
		if (move_uploaded_file($tempname, $folder)) { 
			$msg = "Refresh Page";
                      
		}else{ 
			$msg = "Failed to upload image"; 
 
	} 
 
} 
$result = mysqli_query($con, "SELECT * FROM image"); 
mysqli_close($con);*/

?> 
