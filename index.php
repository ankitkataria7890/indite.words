<?php
session_start();
if(!isset($_SESSION['username']))
header('Location: http://indite.herokuapp.com/login.php');
?>
<?php
header("Refresh:  300;url='REDIRECTION URI'");
$username=$_SESSION['username'];
include 'database.php';
if(!$con){
die('not connected');}
$s="select * from post ORDER BY id desc";
$t=mysqli_query($con,$s);
$n=mysqli_num_rows($t);
$f="select * from following where username='$username'";
$fo=mysqli_query($con,$f);
$fn=mysqli_num_rows($fo);
$fol=mysqli_fetch_array($fo);

$fg="select * from following where followingname='$username'";
$fgc=mysqli_query($con,$fg);
$fgn=mysqli_num_rows($fgc);

$follower=$fgn;
$following=$fn;

$p="select * from post where username='$username'";
$pc=mysqli_query($con,$p);
$pn=mysqli_num_rows($pc);

$sf="select * from registration";
$sfc=mysqli_query($con,$sf);
$sfn=mysqli_num_rows($sfc);
?>
<!doctype html>
<html>
<head>
<script>
 var refresh =$window.localStorage.getItem('refresh');
 console.log(refresh);
 if(refresh===null){
  window.location.reload(true);
  $window.localStorage.setItem('refresh',"1");
 }
 </script>
<link rel="stylesheet" type="text/css" href="csscode.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libbs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+And+White+Picture">
<title>quarantime.co</title>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto;
  grid-gap: 10px;
  background-color:white;
}

.grid{
  background-color:rgba(198,204,212,0.3);
  overflow:auto;
 padding:5px 0 5px 0;
}

#headerr{
  padding-left:10px;
   padding-top:10px;
  border:8px solid white;
  border-width:12px 0 10px 0;
  height:83%; 
  overflow:auto;

}
#outside{
width: 700px;
margin:auto;
margin-bottom:40px;
height:600px;
border:0.5px dotted white;
border-radius:6px;
padding-top:10px;
  overflow:hidden;
<!--box-shadow:0 10px 10px 0 rgba(0,0,0,0.5), 0 6px 20px 0 rgba(0,0,0,0.5);-->

}
#like{
padding:10px 40px 10px 40px;
float:left;
}
pre {
    display: block;
    font-family: monospace;
    white-space: pre; 
}
.material-icons {
color:white;
font-size:40px;}
#share{
color:rgb(0, 122, 153);
float:right;
padding:10px 40px 30px 40px;
}

.sticky {
  position: fixed;
  top: 0px;
  width: 100%;
  margin-top:0;
}

.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
 
 .footer{
  display:none;
 position:fixed;
 bottom:0px;
background-color:rgb(19,43,64);
float:left;
padding:15px;
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

</head>
<body>
<p id="header" style="font-family: 'Black And White Picture', sans serif;"> <b>Let's THROW</b>
  <span style="float:right;margin-bottom:0px;margin-top:70px;margin-right:30px;"><button style="border:0px solid  white;font-size:15px; border-radius:2px;padding:5px;color:white;background:rgba(198,204,212,0.3);cursor:pointer;"
 onclick="footer();" ondblclick="footergo();"><h6>Bottom</h6></button></span></p>
<div  style="height:80px;">
<ul class="index" style="width:100%">
<li onclick="backhome();" ><a class="active" >Home</a></li>
<li class="dropdown">
     <a  href="javascript:void(0)" class="dropbtn">Category</a>
       <div class="dropdown-content">
          <a href="write.php">indite</a>
          <a href="voice.html">voice</a>
          <a href="art.html">illustration</a>
           <a href="photo.html">photography</a>
       </div>
    </li>
<li class="dropdown">
    <a  href="javascript:void(0)" class="dropbtn">Event</a>
       <div class="dropdown-content">
          <a href="link1.html">link1</a>
          <a href="#">link1</a>
          <a href="#">link1</a>
       </div>
    </li>
<li><a  href="#challenge">Challenge</a></li>

<li  onclick="openForm();" style="padding:10px 10px 0 10px; float:right;cursor:pointer;  class="right" ">Account
<div class="form-popup" id="myForm" style="cursor:context-menu;">
  <div  class="form-container">
    <img src="avatar.png" alt="Avatar" style="align:center" class="avatar"> <span style="float:right;"><a href="account.php"><b>View</b></a></span><br>
    <h3><b><br>username</b> : <?php echo $username; ?> <br>
        <b>Follower</b> &nbsp; : <?php echo $follower; ?><br>
    <b>Following</b> : <?php echo $following; ?><br>
      <b>Post</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $pn; ?></h3>
     <b><a href="logout.php">LOGOUT</a></b></h3>
  </div>
</div>
</li>
<li  style="float:right">

<form autocomplete="off" action="usersaccount.php" method="post">
  <div class="autocomplete" style="width:230px;">
    <input id="myInput" type="text" name="myCountry" placeholder="friends..">
  <input type="submit" value="search"> 
 </div>

</form>

</li>

</ul>
<button class="form-closeup" id="close" style="cursor:pointer" onclick="document.getElementById('myForm').style.display='none';document.getElementById('close').style.display='none';"><b>Close</b></button>
<form id="users" action="usersaccount.php" method="post"></form>
</div>
<div class="row">
<div class="column middle">
<div class="grid-container">
<?php 
for($i=1;$i<=$n;$i++)
{$res=mysqli_fetch_array($t);
  $user=$res['username'];
  $user_date=$res['date'];
  $m="select * from following where username='$username' && followingname='$user'";
  $mc=mysqli_query($con,$m);
  $mn=mysqli_num_rows($mc);
  $com=strcmp($username,$user);
  if($mn==1||$com==0){
 $c="select * from postdata where username='$user' && date='$user_date'";
   $d=mysqli_query($con,$c);
  $user_res=mysqli_fetch_array($d); 
    ?>
<div class="grid" id ="outside">
<div style="padding-bottom:10px;">
&nbsp;&nbsp;&nbsp;&nbsp; <button form="users" type="submit" name="myCountry" value="<?php echo $user; ?>" style="border:0px solid white;color:blue;"><b><?php echo $user; ?></b></button>
<span style="float:right; padding-right:20px;"><?php echo $user_date; ?></span></div>
<div id="headerr" style=" background-color: <?php echo $user_res['bgcolor']; ?>;color:<?php echo $user_res['fontcolor']; ?>;font-family:<?php echo $user_res['fontstyle']; ?>;font-size:<?php echo $user_res['text_size']; ?>;">
<pre><?php echo $user_res['textarea']; ?> </pre>
</div>
<div id="like" ><i class="material-icons ">whatshot</i><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
 <i class="material-icons" style="color:rgb(0, 122, 153);">comment</i>
</div>
<a href="https://wa.me/?text=localhost/ankit/yourcontent.php" data-action="share/whatsapp/share"><i class="material-icons" id="share">share</i></a><br>
</div>
 <?php
}
     }
    ?>
 </div>
</div>
</div>

<div class="footer" >
<ul style="list-style:none">
<li> <a href="#">About Us</a></li>
<li> <a href="#">FAQs</a></li>
<li> <a href="#">Blog</a></li>
<li style="float:right"> <a href="contact.php">Contact</a></li>
<li style="float:right"> <a href="suggestion.php">Suggestion</a></li>
</ul>
<br>
<p style="text-align:center; font-size:10px;">Disclaimer: Legal information is not legal advice , <a href="disclaimer.php"style="color:rgb(153, 204, 255)">Read the disclaimer.</a></p>
<p style="text-align:center; font-size:12px; color:rgba(225,225,225,0.8);"> Copyright c 2020 QTS XYZ, Inc. All rights reserverd. <a href="termsofuse.php" style="color:rgb(153, 204, 255)"> Terms of Use </a>|<a href="privacypolicy.php" style="color:rgb(153, 204, 255)"> Privacy Policy - REVISED</a></p>
</div>
<script>
window.onscroll = function() {index(),left()};
var navbar = document.getElementsByClassName("index")[0];
var sticky = navbar.offsetTop;

function index() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}


<!--var leftbar = document.getElementById("left");
var leftsticky = leftbar.offsetTop;

function left() {
  if (window.pageYOffset >= leftsticky) {
    leftbar.classList.add("leftsticky")
  } else {
    leftbar.classList.remove("leftsticky");
  }
}
-->
function backhome() {
document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
}

function openForm() {
  document.getElementById("myForm").style.display = "block";

  document.getElementById("close").style.display = "block";
}

function footer(){
  var x=document.getElementsByClassName("footer")[0];
 x.style.display="block";
}

function footergo(){
  document.getElementsByClassName("footer")[0].style.display = "none";
}
</script>

<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
var countries = [
<?php 
 $o='"';
$d=',';
while($sff=mysqli_fetch_array($sfc)){
echo $o.$sff['username'].$o.$d;
}?>"xyzabc"];

autocomplete(document.getElementById("myInput"), countries);
</script>

</body>
</html>
