<?php
error_reporting(0); 

// If upload button is clicked ... 
if (isset($_POST['upload'])) { 
    $msg="";
	$filename = $_FILES["uploadfile"]["name"]; 
	$tempname = $_FILES["uploadfile"]["tmp_name"];	 
		$folder = "image/".$filename; 
		
	$con = mysqli_connect("localhost", "root", "", "dbsignup"); 
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