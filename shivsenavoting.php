<?php

session_start();
/*
$dbname="sessionpractical";
$servername="localhost";
$username="root";
$password="";


$conn=mysqli_connect($servername,$username,$password,$dbname);

echo $_SESSION['username'];
$email=$_SESSION['username'];

$sql="INSERT into parties(bjp,congress,manse,shivsena,aap,bsp)values('$email',0,0,0,0,0)";
mysqli_query($conn,$sql);
echo $_SESSION['username']."<h1> YOUR VOTE HAS BEEN GIVEN TO BJP. KINDLY LOGOUT<H1>";*/
echo $_SESSION['username'];

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

    <title>
                ELECTROL COMMISSION
    </title>


<body>
<form action="logoutshiv.php" method="post">
<div class="card" style="width:800px align:center" >
    <img class="card-img-top" src="https://c.ndtvimg.com/2018-11/lotdoio8_uddhav-thackeray_625x300_10_November_18.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">SHIVSENA</h4>
      <p class="card-text">AATA YETA MAJHA SARKAR</p>
      
      <button type="submit" class="btn btn-primary" value="submit">SUBMIT</button>
    </div>
  </div>
</div>
</form>
</body>
</html>

