<?php

session_start();


$dbname="sessionpractical";
$servername="localhost";
$username="root";
$password="";


$conn=mysqli_connect($servername,$username,$password,$dbname);

$sql1="SELECT pb from where cno=1";
$result=mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result);



?>
<html>
<body>
pb :- <?php   echo $row['bjpcand'] ?>
</body>
</html>

