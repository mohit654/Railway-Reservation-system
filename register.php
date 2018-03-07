<?php

// create a variable
$myreg=$_POST['reg'];
$conn = mysqli_connect("localhost","root","","objective");
$sql11 = "INSERT INTO obj (reg) VALUES ('$myreg')";
$ins11=mysqli_query($conn,$sql11);
$conn1 = mysqli_connect("localhost","root","","posts");
$sql12 = "INSERT INTO outbox (reg) VALUES ('$myreg')";
$ins12=mysqli_query($conn1,$sql12);

$pass=$_POST['pass'];
//Execute the query
$conn2 = mysqli_connect("localhost","root","","login");

$sql = "INSERT INTO user (reg,pass) VALUES ('$myreg','$pass')";
$ins1=mysqli_query($conn2,$sql);
$uname=$_POST['uname'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$school=$_POST['school'];

$c=mysqli_connect("localhost","root","","profile");
$sql1="INSERT INTO details(reg,uname,fname,lname,email,school) VALUES ('$myreg','$uname','$fname','$lname','$email','$school')";
$ins=mysqli_query($c,$sql1);
if($ins && $ins1 )
{
    echo "You have registered succsefully , GOTO login for accessing VIT WEB CLASS";
}
else{
	echo "Invalid Inputs,Please register again !!";
}
$conn->close();
?>