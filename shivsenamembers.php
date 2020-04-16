<?php

session_start();


$dbname="sessionpractical";
$servername="localhost";
$username="root";
$password="";
$email=$_SESSION['username'];


$conn=mysqli_connect($servername,$username,$password,$dbname);



$sql="SELECT shivsenacandidates.cno,shivsenacandidates.name,shivsenacandidates.nop,shivsenacandidates.age,shivsenacandidates.pb,membersshivsena.region from shivsenacandidates INNER JOIN membersshivsena on  shivsenacandidates.cno=membersshivsena.cno";
$result=mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
//$row=mysqli_fetch_array($result);








?>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
	body {
	  margin: 0;
	  font-family: Arial, Helvetica, sans-serif;
	}
	
	.topnav {
	  overflow: hidden;
	  background-color: #333;
	}
	
	.topnav a {
	  float: left;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	  font-size: 17px;
	}
	
	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}
	
	.topnav a.active {
	  background-color: #4CAF50;
	  color: white;
	}
	</style>

</head>
<body>

<body class="container">
 
	<div class="topnav">
		<a class="active" href="result.php">BACK</a>
</div>
    

<br><br><br>
<br><br><br>

<table  class="table table-striped" style="text-align:center">

<tr>
    <td>CNO</td>
    <td>NAME</td>
    <td>NAME OF PARTY</td>
    <td> AGE</td>
    <td>POLITICAL BACKGROUND</td>
    <td>REGION</td>
</tr>
<?php

if($total!=0)
{

    while ($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>
        <td>".$row['cno']."</td>
        <td>".$row['name']."</td>
        <td>".$row['nop']."</td>
        <td>".$row['age']."</td>
        <td>".$row['pb']."</td>
        <td>".$row['region']."</td>
        </tr>";
             
    }
}
else{
     echo "No Record<br><br>";
 }
 ?>





</body>
</html>