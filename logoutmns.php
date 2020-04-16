<?php

session_start();


$dbname="sessionpractical";
$servername="localhost";
$username="root";
$password="";


$conn=mysqli_connect($servername,$username,$password,$dbname);


$email=$_SESSION['username'];


$sql="INSERT into parties(bjp,congress,manse,shivsena,aap,bsp)values(0,0,'$email',0,0,0)";
mysqli_query($conn,$sql);
echo $_SESSION['username']."<h1> YOUR VOTE HAS BEEN GIVEN TO MAHARASHTRA NAVNIRMAN SENA (MNS). KINDLY LOGOUT<H1>";


$sql1="update signin set voted='true' where email='$email'";
mysqli_query($conn,$sql1);


?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="finallogout.php" method="post">
<button type="submit" value ="submit" class="btn btn-primary">LOGOUT</button>
</form>
</body>
</html>
