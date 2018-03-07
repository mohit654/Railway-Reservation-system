<?php
include('session.php');
// create a variable

$final=$_POST['final'];
$class=$_POST['class'];
//Execute the query
$conn = mysqli_connect("localhost","root","","trains");

$sql = "INSERT into train_book(uname,train_no,class) values('$login_session','$final','$class')";
if(mysqli_query($conn,$sql))
{
    echo "Ticket booked successfully for" . $login_session . "in train" . $final;
     
}
else{
	echo "Invalid Inputs";
}
?>

