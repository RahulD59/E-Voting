<?php

session_start();

$email=$_POST['aadharno'];

$conn=mysqli_connect('localhost','root');

if($conn)
{
	//echo "connection successful";
}
else
{
	//echo "no connect";
}

 mysqli_select_db($conn,'sessionpractical');

$sql="DELETE FROM signin where aadharno=$email";
 mysqli_query($conn,$sql);

header('location:admindelete.php');
?>