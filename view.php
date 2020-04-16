<?php

session_start();

error_reporting(0);
$dbname="sessionpractical";
$servername="localhost";
$username="root";
$password="";
$email=$_SESSION['username'];


$conn=mysqli_connect($servername,$username,$password,$dbname);


$sql="select *from voterview where email='$email'";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data); 



/*echo "Name: ".$result['name']."<br>EMAIL:".$result['email']."<br>AADHAR NO: ".$result['aadharno']."<br>PAN NO: ".$result['panno'];*/

$sql1=$result['name'];
$sql2=$result['email'];
$sql3=$result['aadharno'];
$sql4=$result['panno'];


if($total!=0)
{

}
else{
	echo "No Record";
}



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
		<a class="active" href="parties.html">BACK</a>
</div>
	  
<br>
<br>
<br>
<br>
<br>

<h1 style="text-align:center"></h1>
        <table  class="table table-striped" style="text-align:center">

      

        <tr>
            <td>NAME</td>
            <td><?php
			echo $sql1;
			?>
        </td>
        </tr>


        <tr>
            <td>EMAIL:
            </td>

            <td><?php echo $sql2 ?>
            </td>

        </tr>

        <tr>
            <td>AADHAR NUMBER
            </td>

            <td><?php echo $sql3 ?>
            </td>

        </tr>

        <tr>
            <td>PAN NUMBER
            </td>

            <td><?php echo $sql4 ?>
            </td>

        </tr>

      

</table>





</body>

	</html>