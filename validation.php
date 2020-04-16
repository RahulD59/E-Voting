<?php

session_start();

$dbname="sessionpractical";
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password,$dbname);


$email=$_POST['email'];
$pass=$_POST['password'];
$status="false";


$sql="select  *from signin where email='$email' && password ='$pass' && voted='$status' ";


$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num == 1)
{
    $_SESSION['username']=$email;
    echo "fj";
    header('location:parties.html');
}

elseif($email=='admin@gmail.com' && $pass=='password')
    {
        $_SESSION['username']=$email;   
        echo "ELECTORAL COMMISSION";
        header('location:result.php');
    }

else
{
   header('location:login.php');
}

?>
