<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}
/* style the container */
.container {
  position: relative;
 padding-top:5%;
  text-align :center;

} 

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color:black
  ; 
  border: 2px solid white
  ;
}

/* style inputs and link buttons */
input,
.btn {
  width:70%;
  padding: 12px;
  border: none;
  border-radius: 0px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 14px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

#logbutton{
width:26%;
border:0.5px solid rgb(51, 187, 255);
font-size:14px;
text-align:center;
text-decoration:none;
border-radius:50px;
background-color:white;

padding:1.8%;
color:rgb(51, 187, 255);
}


.btn:hover {
  opacity: 0.5;


  
}
input:hover{
        
	border-style:solid;
 border-width:0px 0px 1px 0px;
border-color:rgb(51, 187, 255);
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.forgot{
float:left;
padding:10px;
font-size:14px;
text-decoration:none;}
.forgot:hover{
color:rgb(51, 187, 255);}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color:rgb(96,96,96);
  color: white;
  cursor: pointer;
opacity:0.5;
 }

 #logbutton:hover {
  background-color: rgb(0, 153, 230);
color:white;
opacity:1;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding-left: 250px;
  margin-top: 6px;
}
.right{
padding-right:250px;
float: left;
  width: 50%;
  margin: auto;
  margin-top: 4px;
}
 #login{
position:relative;
padding-left:0px;
float:left;
font-size:14px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
 /* transform: translate(-50%)*/
  border: 0.5px solid rgba(96,96,96,0.5);
 opacity:0.5;
  height: 190px;
}


/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>
<p style=" padding=30px; font-size:30px;color:black;"><a href="#logo">QTs</a>
<span style=" float:right;padding=60px; "><button class="button button1" onclick="goBack()"><i class="material-icons" style="font-size:50px; color:black; opacity:0.4;">clear</i></button></span></a></p>

<div class="container">
  <form action="validate.php" method="post">
    <div class="row">
      <div style="text-align:center; font-size:40px; opacity:1;">Log In</div>
<br>
<div style="font-size:15px ;opacity:0.5"> New to QTs? <span ><a style="color:rgb(51, 187, 255); text-decoration:none;" href="signu.php">Sign Up</a></span>
</div>
<br> <br>
      <div class=vl></div>
        <div class="col">
       
        <input style="border-bottom:0.5px ridge rgb(96,96,96)" type="text" name="username" placeholder="Username" required >
        <input style="border-bottom:0.5px ridge rgb(96,96,96)"  type="password" name="password" placeholder="Password" required>
     
<br> <div id="login" style="margin-left:55px;"> <!--input  type="checkbox" name="rem">
<label  for="rem"> Remember me</label-->
  <span> <a class="forgot" href="#">Forgot password</a></span></div>
 <br> 
        <input  id="logbutton"  type="submit" value="Login">
      </div>
      
    
      <div class="right">
       <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
<br><br>
        <a  class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
       
        <a  class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>
</div>
     
  </form>
</div>
<br><br>
<p style="font-size:11px; text-align:center; opacity:0.5;" >  * By logging in, you agree to our  <a style="color:rgb(51, 187, 255); text-decoration:none; opacity:1;" href="termsofuse.php">Terms of Use </a>and to receive<br> QTs emails & updates and acknowledge that you read our<br><a style="color:rgb(51, 187, 255);opacity:1; text-decoration:none;" href="privacypolicy.php"> Privacy Policy.</a>
</p>
<script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>