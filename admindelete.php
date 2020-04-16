<?php

session_start();
//include("aniket1(1).php");
error_reporting(0);
$dbname="sessionpractical";
$servername="localhost";
$username="root";
$password="";
$email=$_SESSION['username'];


$conn=mysqli_connect($servername,$username,$password,$dbname);


$sql="select *from signin";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);




/*echo "Name: ".$result['name']."<br>EMAIL:".$result['email']."<br>AADHAR NO: ".$result['aadharno']."<br>PAN NO: ".$result['panno'];*/

/*$sql1=$result['name'];
$sql2=$result['email'];
$sql3=$result['aadharno'];
$sql4=$result['panno'];*/






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
	  
<br>
<br>
<h2 style="text-align: center;">VOTERS DETAILS</h2>

<h1 style="text-align:center"></h1>





       <table  class="table table-striped" style="text-align:center">

       		<tr>
       			<td>NAME</td>
       			<td>EMAIL</td>
       			<td>AADHAR NUMBER</td>
       			<td>PAN NUMBER</td>
       		</tr>
       		<?php

       		if($total!=0)
			{

					while ($result=mysqli_fetch_assoc($data))
 			 {
  				echo "<tr>
       				<td>".$result['name']."</td>
       				<td>".$result['email']."</td>
       				<td>".$result['aadharno']."</td>
       				<td>".$result['panno']."</td>
       				</tr>";
  			}
			}
			else{
					echo "No Record<br><br>";
				}

 			 

       		
			?>

			
      

      

	  </table>
<br><br>
<div class="container" style="background-color: SeaShell ;">
  
  <form action="delete.php" method="post">
    <div class="form-group">
      <label for="email">ENTER AADHAR NUMBER OF PERSON YOU WANT TO REMOVE FROM RECORDS</label>
      <input type="text" class="form-control" id="email" placeholder="ENTER AADHAR NUMBER" name="aadharno">
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



</body>

	</html>