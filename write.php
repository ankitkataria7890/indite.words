<?php
session_start();
if(!isset($_SESSION['username']))
 {
header('Location: http://indite.herokuapp.com/login.php');
}
$username=$_SESSION['username'];

$host='sql12.freesqldatabase.com';
$dbuser='sql12345161';
$dbpassword='3dqYuAVkkt';
$dbname='sql12345161';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(!$con){
die('not connected');}

?>
<DOCTYPE! html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <script type="text/javascript" src="internet.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="writecss.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script>

var myIndex = 0;
var stop;
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  stop=setTimeout(carousel, 4000); // Change image every 2 seconds
}
function myStopFunction() {
  clearTimeout(stop);
}
</script>
    <script type="text/javascript">
      google.load("elements", "1", {
            packages: "transliteration"
          });
      function onLoad() {
        var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.HINDI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: false
        };
 
        var control =
            new google.elements.transliteration.TransliterationControl(options);
  
         var userlang = document.getElementsByClassName('lang');
    control.makeTransliteratable(userlang);	
        // Enable transliteration in the editable elements with id
        // 'transliterateDiv'.
        //control.makeTransliteratable(['transliterateDiv']);
       // control.makeTransliteratable(['transliterateDiv2']);
      }
      google.setOnLoadCallback(onLoad);
    </script>
<script>
function colortext(){
var x= document.getElementById("font");
var y= document.getElementById("transliterateDiv");
var z=x.value;
y.style.color=z;}

function bgcolor(){
var x= document.getElementById("color");
var y= document.getElementById("transliterateDiv");
var z=x.value;

y.style.backgroundColor=z;}

 function text(){
 var x= document.getElementById("num");
 var z=  document.getElementById("transliterateDiv");
 var y= x.value;
 z.style.fontSize=y;
 
    
 }
function mouseover(){
var x= document.getElementById("num");
 var z=  document.getElementById("transliterateDiv");
 var y= x.value;
 z.style.fontSize=y;
 
 }


function change_color() {
  document.getElementById("font").click(); 
}
function savecontent() {
  document.getElementById("savecon").click(); 
}
function font_change(){
var e=document.getElementById("fonttext");
 var z=  document.getElementById("transliterateDiv");
 var j=e.options[e.selectedIndex].text;
 z.style.fontFamily=j;
}
function show_font() {
  document.getElementById("fonttext").click(); 
}
function set(){
var a=document.getElementById("fonttext").value;
var b= document.getElementById("num").value;
var c= document.getElementById("font").value;
var d= document.getElementById("color").value;
var z=  document.getElementById("transliterateDiv");
z.style.fontFamily=a;
z.style.fontSize=b;
z.style.color=c;
z.style.backgroundColor=d;
}
</script>
<style>

        body
        {
            background-color: #eee ;
        }

button.color {
border:0px solid grey;
padding: 6px 15px;
margin-right:6px;
color:black;
}    
 button.color:hover{
border:1px ridge rgb(19,43,64);
border-radius:30px;
background-color:rgba(198,204,212,0.0);
cursor:pointer;
}
</style>
  </head>
  <body>
<div id="header" style="font-family: 'Tangerine', serif;
        font-size: 40px;" onclick="myStopFunction()" ondblclick="carousel()">
<div class="myslides"><i>"The first sentence can’t be written until the final sentence is written.”</i><br>
<span style="color:white">—Joyce Carol Oates, WD</span></div>

<div class="myslides"><i>“Literature is strewn with the wreckage of men who have minded beyond reason the opinions of others.”</i><br>
<span style="color:white">—Virginia Woolf</span></div>

<div class="myslides"><i>“Remember: Plot is no more than footprints left in the snow after your characters<br> have run by on their way to incredible destinations.”</i><br>
<span style="color:white">—Ray Bradbury, WD</span></div>

<div class="myslides"><i>“The road to hell is paved with adverbs.”</i><br>
<span style="color:white">—Stephen Kings</span></div>
</div>
<script>carousel();</script>
<div style="float:right; padding:11px 20px"  >&nbsp;&nbsp;<br><span></span>
</div>
<div style="margin-top:15px;">

<form   action="collection.php" method="post">
<input style="width: 80px; float: right; cursor:pointer; " type="submit" name="display" value="collection">
</form>
<button style="float:right;cursor:pointer; width:80px;" onclick="savecontent()">save</button>
</div>
<div class="column left">
<ul class="link" style=" cursor:pointer">
<li  onclick="addClass()" style="padding-top:60px;"><dfn title="Diary/UnDiary Format"><i class="material-icons">list</i></dfn></li>
<li onclick="show_font()"><dfn title="Text Style"><i class="material-icons">create</i></dfn>
<select id="fonttext" name="fontstyle" form="textstyle"  onchange="font_change()">
  <option value="Arial">Arial</option>
  <option id="fonttextoption"  value="Courier New Italic" selected="selected">Courier New Italic</option>
  <option value="kalam">Impact</option>
<option value="Marlet"selected="selected" >Marlett</option>
<option value="Verdana">Verdana</option>
<option value="Verdana Italic">Verdana Italic</option>
<option value="Symbol">Symbol</option>
<option value="Trebuchet MS">Trebuchet MS</option>
</select></li>

<li style="padding-left:20px"> <dfn title="Text Size"><i class="material-icons">format_size</i></dfn>
  <select id="num" form="textstyle" name="textsize" onchange="text()" onfocus="this.size=10;" onblur="this.size=1;"  onchange="this.size=1; this.blur();" >
    <option value="10px" selected="selected">10</option>
  <?php  
  $z=2;
    for($i=6;$i<37;$i++){ 
  $f=$i*$z;   
  echo "<option value=".$f."px>".$f."</option>";
}
?>
   
  </select></li>

<li><input type="color" style="display:none"  id="font" name="fontcolor" form="textstyle" onchange="colortext();">
<button style="border:0px solid white;" class="color" onclick="change_color()"><dfn title="Text Color"><i class="material-icons">font_download</i></dfn></button></li>

<li class="bgcolor"><dfn title="Background  color"><input id="color" form="textstyle" style="width:25px;cursor:pointer; " type="color" name="bgcolor"  value="black" onchange="bgcolor();" ></dfn></li>
<!--li style="padding-left:20px"> <dfn title="Opacity"><i class="material-icons">format_size</i></dfn>
  <select id="opacity" form="textstyle" name="opacity" onchange="bgcolor();" onfocus="this.size=10;" onblur="this.size=1;"  onchange="this.size=1; this.blur();" >
     <option value="00">0%</option>   
    <option value="1A">10%</option>   
<option value="33">20%</option>   
<option value="4D">30%</option>   
<option value="66">40%</option>   
<option value="80">50%</option>   
<option value="99">60%</option>
<option value="B3">70%</option>   
<option value="CC">80%</option>
<option value="E6">90%</option>         
 <option value="FF" selected="selected">100%</option>
  </select></li-->
</ul>
</div>
<div class="column middle">
<form id="textstyle" action="textarea.php" method="post">
<textarea  id="transliterateDiv" class="lang" name="text" style="border:0px solid #999999; color:#333333;padding:15px; font-size:10px; min-width:100%;  max-width:100%;min-height:98%;" onclick="set()" required  oninvalid="this.setCustomValidity('Cannot Save Empty TEXT')"
    oninput="this.setCustomValidity('')"  ><?php if(isset($_POST['edit'])){ 
$date=$_SESSION['savedate'];
$s="select * from content where username='$username' && date='$date'";
$t=mysqli_query($con,$s);
$res=mysqli_fetch_array($t);
echo $res['textarea'];}?></textarea>
<input id="savecon" style="width: 80px; float: right; display:none;" type="submit" name="submit" value="save" >

</form></div>
<div class="footer">
<ul style="list-style:none">
<li> <a href="#">About Us</a></li>
<li> <a href="#">FAQs</a></li>
<li> <a href="#">Blog</a></li>
<li style="float:right"> <a href="#">Contact</a></li>
<li style="float:right"> <a href="suggestion.php">Suggestion</a></li>
</ul>
<br><br>
<p style="text-align:center; font-size:10px;">Disclaimer: Legal information is not legal advice , <a href="disclaimer.php"style="color:rgb(153, 204, 255)">Read the disclaimer.</a></p>
<br><p style="text-align:center; font-size:12px; color:rgba(225,225,225,0.8);"> Copyright c 2020 QTS XYZ, Inc. All rights reserverd. <a href="termsofuse.php" style="color:rgb(153, 204, 255)"> Terms of Use </a>|<a href="privacypolicy.php" style="color:rgb(153, 204, 255)"> Privacy Policy - REVISED</a></p>

</div>
<script>
function addClass() {
var x=document.getElementById("transliterateDiv");

x.classList.toggle("notes");
}
</script>

  	 </body>
</html>
