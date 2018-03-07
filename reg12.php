<?php
include('session.php');
?>
<head>
<title>Railway ticket</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a{
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color:C09F80;
}
</style>
</head>
<body>
<div style="background-color:white;border:2px dotted white;height="20%">
<div style="float:left;padding-left:20px">
<img src="images.jpg" alt=" " style="width:120px;height:90px;border-radius:50px;border:3px dotted white;margin-top:35px;" /></div>
<div style= "float:right">
<h3 style="color:black;text-align:right">@ Follow Us On</h3>

<p style="text-align:right"><a href="http://facebook.com"><img src="facebook.png" height="20px" width="20px"></a>
<a href="http://google.com"><img src="google.png" height="20px" width="20px"></a>
<a href="http://wikipedia.com"><img src="wikipedia.png" height="20px" width="20px"></a>
<a href="http://twitter.com"><img src="twitter.png" height="20px" width="20px"></a>
<a href="http://irctc.com"><img src="irctc (2).jpg" height="20px" width="20px"></a></p></div>
<h1 style="font-size:40px;color:brown"><center><strong>Railway Booking Center</strong></center></h1>
 
</div>

<! <div  style="background-color:grey;border:1px dotted white;" width="100%" height="5%" data-role="header"  align="center"> 
<marquee style="background-color:#989B43" behaviour="alternate"><strong><font color="white">Welcome to our rail booking center!!!</strong></marquee>

</div>

<ul>
<li><a href="reg10.php" target="_self">Home</a></li>
<li><a href="about.php" target="_blank">About Us</a></li>
<li><a href="contact us.php" target="_blank">Contact Us</a></li>

</ul>

<div style="background-image:url(rail.jpg) no-repeat;position:static;border-radius:150px;" width="100%" height="75%" align="center" style="padding-left:100px;padding-right:100px;">
<table bgcolor="black" style="border-collapse:collapse;">
<th style="background-color:#989B43;">
<?php echo "WELCOME ".$login_session; ?><br>
TRAIN<br>BOOKING
</th>
    <h2><a href="logout.php">LOGOUT</a></h2>
<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCome to know about us&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
<th align="center" style="background-color:#989B43;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color="white">Gallery</th>
<tr>
<td style="width:120px;">
<table style="width:80px;height:10px;border-collapse:collapse;">
<tr>
<div  align="center">
</div>
<script>
document.getElementById("t1").onfocus=function(){
document.getElementById("t1").style.background="gray";
document.getElementById("t1").style.color="white";
}
document.getElementById("t2").onfocus=function(){
document.getElementById("t2").style.background="gray";
document.getElementById("t2").style.color="white";
}
</script>
</tr>
</table>
</td>
<td cell-padding="10px" style="padding:50px;width:300px;border-left:2px solid red;border-right:2px solid red;">
<div align='center' style="box-shadow:12px 15px 15px rgba(0,255,255);border:2px dotted blue">
<form action="reg16.php" method="POST">
<p>FROM:</p><select name="from" style="width:190px;border-radius:50px;">
<option value="Select">Choose </option>
<option value="delhi">Delhi</option>
<option value="Mumbai">Mumbai</option>
<option value="Vellore">Vellore</option>
<option value="Kolkata">Kolkata</option>
</select>
<br><hr>
<p>TO   :</p><select name="to"  style="width:190px;border-radius:50px;">
<option value="Select">Choose</option>
<option value="delhi">Delhi</option>
<option value="Mumbai">Mumbai</option>
<option value="Vellore">Vellore</option>
<option value="Kolkata">Kolkata</option>
</select><br><hr>
<input type="submit" value="Continue to view trains" >
<h3><button><a href="reg13.php" target="blank">CANCEL - GO BACK TO DASHBOARD</a></button></h3>
</div>    
</form>
</div>
   
<script>
document.getElementById("sel1").onchange=function(){
if(document.getElementById("sel1").value==="for")
{ 
document.getElementById("d2").style.display="block";
document.getElementById("d1").style.display="none";
}
else if(document.getElementById("sel1").value===" ")
{
window.alert("Please choose");
}
else{
document.getElementById("d1").style.display="block";
document.getElementById("d2").style.display="none";
}
}
</script>
</td>
<td>
<table style="border-collapse:collapse;"> 
<tr>
<td>
<img src="rail.jpg" alt=" " style="border-radius:50px;width:120px;height:120px;">
</td>
<td>
<img id="i1" src="tr1.jpg" alt=" " style="border-radius:50px;opacity:0.5;width:120px;height:120px;"/>
</td>
</tr>
<tr>
<td>
<img id="i2" src="tr3.jpg" alt=" " style="border-radius:50px;opacity:0.5;width:120px;height:120px;"/>
</td>
<td>
<img src="tr2.jpg" alt=" " style="border-radius:50px;width:120px;height:120px;"/>
</td>
</tr>
<tr>
<td>
<img src="tr4.jpg" alt=" " style="border-radius:50px;width:120px;height:120px;"/>
</td>
<td>
<img id="i3" src="tr.jpg" alt=" " style="border-radius:50px;opacity:0.5;width:120px;height:120px;"/>
</td>
</tr>
</table>
</td>
</tr>
</table>
<script>
document.getElementById("i1").onmouseover=function(){
document.getElementById("i1").style.opacity=1;
}
document.getElementById("i1").onmouseout=function(){
document.getElementById("i1").style.opacity=0.5;
}
document.getElementById("i2").onmouseover=function(){
document.getElementById("i2").style.opacity=1;
}
document.getElementById("i2").onmouseout=function(){
document.getElementById("i2").style.opacity=0.5;
}
document.getElementById("i3").onmouseover=function(){
document.getElementById("i3").style.opacity=1;
}
document.getElementById("i3").onmouseout=function(){
document.getElementById("i3").style.opacity=0.5;
}
</script>
</div>
<p style="color:black;text-align:center">Copyright @ 2017 - www.irctc.co.in. All Rights Reserved<br/>
Contact Us:-(+91)7206862727
</body>