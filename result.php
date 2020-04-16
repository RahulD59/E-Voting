<?php

session_start();



?>


<html>

<head>
  <title>Bootstrap Example</title>
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
    <a class="" href="login.php">BACK</a>
    <a class="active" href="#">HOME</a>
    <a class="" href="admindelete.php">VOTERS DETAILS</a>
    <a class="" href="members.html">CANDIDATE DETAILS</a>
</div>


<h1 style="text-align:center"><?php echo "HELLO ADMIN " ?>


<table class="table table-striped">
	<thead>
	<th>LEADERBOARD</th>
		<th>FINALRESULT</th>
	</thead>
	<tbody>
		<tr>
			<td>
  				<div class="card" style="width:400px">
    				<img class="card-img-top" src="https://png.pngtree.com/svg/20160111/a2f0aa869c.svg" alt="Card image" style="width:100%">
    				<div class="card-body">
      					<h4 class="card-title">LEADERBOARD</h4>
      					<a href="leaderboard.php" class="btn btn-primary">CHECK</a>
    				</div>
  				</div>
			</td>

			<td>
  				<div class="card" style="width:400px">
    				<img class="card-img-top" src="data:image/png;base64,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" alt="Card image" style="width:100%">
    				<div class="card-body">
      					<h4 class="card-title"> RESULT</h4>
      					<a href="finalresult.php" class="btn btn-primary">CHECK </a>
    				</div>
  				</div>
			</td>

		</tr>




</body>



</html>