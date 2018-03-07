<head>
<title>Railway ticket</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>
<body>
<div  style="background-color:blue;border:1px dotted white;" width="100%" height="20%" data-role="header"  align="center">
<p><strong><style="font-color:white;font-size:15px;">Railway Booking Center</strong></p>
<img src="inmap.jpg" alt=" " style="width:120px;height:120px;border-radius:50px;border:3px dotted white;"/>
</div>
<div style="background-color:blue;border:2px dotted white;">
<marquee behaviour="alternate"><strong><font color="white">Welcome to our rail booking center</strong></marquee>
</div>
<div style="background-image:url(rail.jpg) no-repeat;position:static;border-radius:150px;" width="100%" height="75%" align="center" style="padding-left:100px;padding-right:100px;">
<table bgcolor="cyan" style="border-collapse:collapse;">
<th style="background-color:yellow;">
Login/Register
</th>
<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCome to know about us&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
<th align="center" style="background-color:green;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color="white">Gallery</th>
<tr>
<td style="width:120px;">
<table style="width:80px;height:10px;background-color:yellow;border-collapse:collapse;">
<tr>
<td>
<td cell-padding="10px" style="padding:50px;width:300px;border-left:2px solid red;border-right:2px solid red;">
<a href="reg10.php" target="blank">GO back to Login Page</a>
</td>
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
<div align="center">

<form action="reg11.php" method="POST">
<input type="text" name="t1" id="t1" style="border-radius:100px;width:120px;"  placeholder="Choose a username"/><hr><br>
<input type="password" name="t2" id="t1" style="border-radius:100px;width:120px;" placeholder="Choose a password"/><hr><br>
<input type="password" name="t3" id="t1" style="border-radius:100px;width:120px;" placeholder="Confirm password"/><hr><br>
<input type="text" name="t4" id="t1" style="border-radius:100px;width:120px;" placeholder="Give your address"/><hr><br>
<input type="email" name="t5" id="t1" style="border-radius:100px;width:120px;" placeholder="Give your E-Mail"/><hr><br>
<input type="text" name="t6" id="t1" style="border-radius:100px;width:120px;" placeholder="Mobile No:"/><hr><br>
<select name="sel1" style="border-radius:100px;width:120px;" id="t1">
<option value="male">Male</option>
<option value="female">Female</option>
</select><hr><br>
<input type="text" name="t7" id="datepicker" style="border-radius:100px;width:120px;" placeholder="Date Of Birth"/><hr>
<button name="bt1" style="background-color:yellow;border:2px solid red;"><font color="red"><font-size="20px">Register and Continue</button>
</form>
</div>
</td>
<td>
<table style="border-collapse:collapse;"> 
<tr>
<td>
<img src="rail.jpg" alt=" " style="border-radius:50px;width:120px;height:120px;">
</td>
<td>
<img id="i1" src="rail.jpg" alt=" " style="border-radius:50px;opacity:0.5;width:120px;height:120px;"/>
</td>
</tr>
<tr>
<td>
<img id="i2" src="rail.jpg" alt=" " style="border-radius:50px;opacity:0.5;width:120px;height:120px;"/>
</td>
<td>
<img src="rail.jpg" alt=" " style="border-radius:50px;width:120px;height:120px;"/>
</td>
</tr>
<tr>
<td>
<img src="rail.jpg" alt=" " style="border-radius:50px;width:120px;height:120px;"/>
</td>
<td>
<img id="i3" src="rail.jpg" alt=" " style="border-radius:50px;opacity:0.5;width:120px;height:120px;"/>
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
<div style="background-color:blue;border:1px dotted white;" width="100%" height="5%" data-role="footer"  align="center">
<font color="white">
@2016  SDC, Railway Commitee,Mittal Company,India.
</div>
</body>
<?php
$id=0;
if(isset($_POST["t1"]))
{
$a=$_POST["t1"];
$b=md5($_POST["t2"]);
$c=$_POST["t7"];
$d=$_POST["t4"];
$e=$_POST["t5"];
$f=$_POST["t6"];
$g=$_POST["sel1"];
$conn=new mysqli("localhost","root","","lograil");
$sql="select id from lograil;";
$res=$conn->query($sql);
if($res->num_rows>0)
{
while($row=$res->fetch_assoc())
{
$id=$row["id"];
}
$id+=1;
echo $id;
$sql1="insert into lograil values($id,$a,$b,0,$g,$d);";
if($conn->query($sql1)===true)
{
echo "<script>window.alert('Thanks for visting us')</script>";
echo "<script>window.location.assign('reg10.php')</script>";
}
}
}
?>