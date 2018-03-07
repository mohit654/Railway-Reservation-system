<?php

// create a variable
$uname=$_POST['t1'];
$pass=$_POST['t2'];
//Execute the query
$conn = mysqli_connect("localhost","root","","login");

$sql = "INSERT INTO user (uname,pass) VALUES ('$uname','$pass')";
$ins1=mysqli_query($conn,$sql);

$c=$_POST['t7'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
$g=$_POST['sel1'];
$conn1=mysqli_connect("localhost","root","","profile");
$sql1= "INSERT INTO details (uname,pass,address,email,number,gender,age) VALUES ('$uname','$pass','$d','$e','$f','$g','$c')";
$ins=mysqli_query($conn1,$sql1);
if($ins && $ins1)
{
    echo "You have successfully registered ! Please login to use our service";
}
else{
	echo "Invalid Inputs";
}
$conn->close();
?>

<head>
    <body>
    <h3><button><a href="reg15.php" target="blank">Click here to login</a></button></h3>
    </body>
</head>