<?php

session_start();

$dbname="sessionpractical";
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password,$dbname);



$sql1="SELECT COUNT(bjp) as cbjp from parties";
$sql2="SELECT COUNT(congress) as ccongress from parties";
$sql3="SELECT COUNT(manse) as cmanse from parties";
$sql4="SELECT COUNT(shivsena) as cshivsena from parties";
$sql5="SELECT COUNT(aap) as caap from parties";
$sql6="SELECT COUNT(bsp) as cbsp from parties";


$result1=mysqli_query($conn,$sql1);

$result2=mysqli_query($conn,$sql2);

$result3=mysqli_query($conn,$sql3);

$result4=mysqli_query($conn,$sql4);

$result5=mysqli_query($conn,$sql5);

$result6=mysqli_query($conn,$sql6);



//echo $_SESSION['username'];

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
    
     
    <div class="topnav">
    <a class="active" href="result.php">BACK</a>
		<a class="login.php" href="login.php">LOGOUT</a>
</div>

    
    <br><br>
       <?php
    
    $row = mysqli_fetch_array($result1);
  

        $row2=mysqli_fetch_array($result2);
        

        $row3=mysqli_fetch_array($result3);
        

        $row4=mysqli_fetch_array($result4);
        

        $row5=mysqli_fetch_array($result5);
      

        $row6=mysqli_fetch_array($result6);
        
      
    
        ?>
<h1 style="text-align:center"></h1>
        <table  class="table table-striped" style="text-align:center">

        <tr>
            <td>PARTIES RANK
            </td>

            <td>SCOREBOARD
            </td>

        </tr>

        <tr>
            <td>BHARTIYA JANTA PARTY</td>
            <td><?php
            echo $row['cbjp'];
            ?>
        </td>
        </tr>


        <tr>
            <td>INDIAN NATIONAL CONGRESS
            </td>

            <td><?php echo $row2['ccongress'] ?>
            </td>

        </tr>

        <tr>
            <td>MANSE
            </td>

            <td><?php echo $row3['cmanse'] ?>
            </td>

        </tr>

        <tr>
            <td>SHIVSENA
            </td>

            <td><?php echo $row4['cshivsena'] ?>
            </td>

        </tr>

        <tr>
            <td>AAM AADMI PARTY
            </td>

            <td><?php echo $row5['caap']?>
            </td>

        </tr>
        <tr>
            <td>BAHUJAN SAMAJ PARTY
            </td>

            <td><?php echo $row6['cbsp'] ?>
            </td>

        </tr>

</table>



</body>

    </html>