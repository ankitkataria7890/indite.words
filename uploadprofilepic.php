<?php
error_reporting(0); 

// If upload button is clicked ... 
if (isset($_POST['upload'])) { 
    $msg="";
	$filename = $_FILES["uploadfile"]["name"]; 
	$tempname = $_FILES["uploadfile"]["tmp_name"];	 
		$folder = "image/".$filename; 
		
	$username=$_SESSION['username'];
$host='sql12.freesqldatabase.com';
$dbuser='sql12345161';
$dbpassword='3dqYuAVkkt';
$dbname='sql12345161';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
                 $d = "delete from image where username='$username'"; 
         $dl=mysqli_query($con,$d);
		// Get all the submitted data from the form 
		$sql = "INSERT INTO image (filename) VALUES ('$filename')"; 

		// Execute query 
		mysqli_query($con, $sql); 
		
		// Now let's move the uploaded image into the folder: image 
		if (move_uploaded_file($tempname, $folder)) { 
			$msg = " uploaded successfully"; 
		}else{ 
			$msg = "Failed to upload "; 
	} 
    
}  echo "<script>
             alert('<?php echo $msg;?>'); 
              
     </script>";

?>
