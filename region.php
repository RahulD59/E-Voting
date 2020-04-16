<?php

session_start();

$dbname="sessionpractical";
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$emailid=$_SESSION['username'];


$sql="select  region from signin where email='$emailid'  ";


$result=mysqli_query($conn,$sql);


if($result=='Nashik')
{
    header('location:belapur.php');
}

elseif($result=='Thane')
{
    header('location:thane.php');

}
else
{
    header('location:mumbai.php');
}

?>
