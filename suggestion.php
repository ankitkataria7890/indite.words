<!DOCTYPE html>
<html>
<head><title>Suggestion</title>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:white;

}
.container {
  position: absolute;
  width:100%;
margin: 0;
 overflow:none;
color:white;
}

.container img {vertical-align: middle;
}

.container .content {
  position: absolute;
  float:right;
   top:0;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 35%;
  padding: 20px;

 margin-left:870px;
margin-bottom:0;
overflow:none;
  
}

.centered {
  position: absolute;
  top: 10%;
  left: 45%;
  transform: translate(-50%, -50%);
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text],input[type=mail],select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid white;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
background-color: rgb(242, 217, 217);  
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}



/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="container">
  <img src="suggestion.jpg" alt="Notebook" style="width:100%;">
<div class="centered" style="text-align:center;">
<h1 style="font-family:MingLiU_HKSCS-ExtB"><i>Suggestions...</i></h1>
<p> <h4 style="font-family:Gabriola;"> Take a sip of coffee and write us with your creative thougts</h4></p>
</div>
  <div class="content">
   
      <form  name="submission" action="user_suggestion.php" method="post" onsubmit="return validation()">
         <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">     
        <dfnn title="optional"><label for="email" >Email</label>
        <input type="mail" id ="email" name ="email" placeholder="Your email.." ></dfnn>
        <label for="country">Country</label>
        <select id="country" name="country" required>
         <option value="india">India</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="none">Other</option>
        </select>
        <label for="suggest">Suggestion</label>
        <textarea id="suggest" name="suggest" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
      </div>
      </div>
   
</body>
</html>
