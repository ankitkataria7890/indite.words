<?php


// If upload button is clicked ... 
if (isset($_POST['upload'])) { 
    $msg="";
	$filename = $_FILES["uploadfile"]["name"]; 
	$tempname = $_FILES["uploadfile"]["tmp_name"];	 
		$folder = "https://github.com/ankitkataria7890/indite.words/image/".$filename; 
		
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
			$msg = " uploaded successfully"; 
		}else{ 
			$msg = "Failed to upload "; 
	} 
    
}  echo "<script>
             alert('<?php echo $msg;?>'); 
              
     </script>";

?>
