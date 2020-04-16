<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>REGISTRATION FORM</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
<?php

		$nameErr = $emailErr = $passerr=$aadharerr=$panerr=$ageerr=$regionerr= "";
$name = $email = $pass = $aadharno=$panno=$age=$region="";



$status="false";



if (!empty($_POST)) {
  if (empty($_POST["user"])) {
    $nameErr = "NAME IS REQUIRED";
  } else {
   // $name = array($_POST["name"]);
   $name=$_POST['user'];  
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST["user"])) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }



  if(empty($_POST['aadharno']))
  {
  	$aadharerr="AADHAR NUMBER IS REQUIRED";
  }
  else
  {
  	$aadharno=$_POST['aadharno'];

  	$number=preg_match('@[0-9]@', $aadharno);
  	if(strlen($_POST['aadharno'])!=12)
  	{
  		$aadharerr="Enter Valid AADHAR NUMBER";
  	}

  	if(!$number)
  	{
  		$panerr="Enter Valid AADHAR NUMBER";

  	}

  }




  if(empty($_POST['region']))
  {
  	$regionerr="Region NUMBER IS REQUIRED";
  }
  else
  {
    $region=$_POST['region'];
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST["region"])) {
      $regionerr = "Only letters and white space allowed"; 
    }
  }
    


//password validation

  if(empty($_POST['password']))
  {
  	$passerr="PLEASE ENTER PASSWORD";
  }


else
{
  $pass=$_POST['password'];
}






  if(empty($_POST['panno']))
  {
  	$panerr="PAN NUMBER IS REQUIRED";
  }
  else
  {
  	$panno=$_POST['panno'];

  	$number=preg_match('@[0-9]@', $panno);
  	if(strlen($_POST['panno'])!=10)
  	{
  		$panerr="Enter Valid PAN NUMBER";
  	}

  	if(!$number)
  	{
  		$panerr="Enter Valid PAN NUMBER";

  	}

  }



//age validation
  if(empty(($_POST['age'])))
  {
  	$ageerr="PLEASE ENTER AGE";
  }
  else{
    $age=$_POST['age'];

  	if(($_POST['age'])<18)
  	{
  		$ageerr="YOU ARE NOT ABOVE 18";
  	}
  }


  /*if (empty($_POST["cpassword"])) {
  	$passerr="Password Is Required";
  }
  else {
  			$uppercase = preg_match('@[A-Z]@', $cpassword);
			$lowercase = preg_match('@[a-z]@', $cpassword);
			$number    = preg_match('@[0-9]@', $cpassword);
			if(!$uppercase || !$lowercase || !$number || strlen($cpassword) < 10) {
			$passerr="Enter Correct Password";

			}

  }*/

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
 
}

session_start();


$dbname="sessionpractical";
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password,$dbname);
/*
if (!$conn) {
    die('Could not connect: ' . mysql_error());
  }
else
{
  echo "  successfull";
}

$name=$_POST['user'];   
$email=$_POST['email'];
$pass=$_POST['password'];
$age=$_POST['age'];

$aadharno=$_POST['aadharno'];
$panno=$_POST['panno'];
$status="false";
$region=$_POST['region'];
*/

$sql="select  *from signin where name ='$name' && email='$email' && password ='$pass' && age='$age'&& region='$region' && aadharno='$aadharno' && panno='$panno' ";

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num==1)
{
    echo "duplicate data";
}

else
{
    
    $sql="INSERT into signin(name,email,password,age,region,aadharno,panno,voted)values('$name','$email','$pass','$age','$region','$aadharno','$panno','$status')";
    mysqli_query($conn,$sql);
    if(!$sql)
    {
        echo "NO";

    }
    else  
    {
            echo "Yes";
    }
    echo $region;

   
}







		
	?>



    <div class="page-wrapper  p-t-100 p-b-100 font-robo" style="background-color: LightCoral ">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
               
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form  action="anu.php" method="POST">
                        <div class="input-group">
                            
                           <input class="input--style-1" type="text" placeholder="NAME" name="user">
                            <span class="error"><?php echo $nameErr;?></span>
                        </div>
                        <div class="input-group">
                            <input type="email" name="email" placeholder="EMAIL" class="input--style-1">
                        </div>
                        <div class="input-group">
                             <input type="password" name="password" placeholder="PASSWORD" class="input--style-1">
                             <?php echo $passerr ?>
                        </div>
                 
                            <div class="input-group">
                                    
                                    <input type="text" name="age" placeholder="AGE" class="input--style-1">
                                    <?php echo $ageerr ?>
                            </div>



                            <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="region">
                                            <option disabled="disabled" selected="selected">Region</option>
                                            <option>Thane</option>
                                            <option>Mira Bhayander</option>
                                            <option>Nashik</option>
                                            

                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            
                                   



                           
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            
                        
                        <div class="input-group">
                           <input type="text" name="aadharno" placeholder="AADHAR NUMBER" class="input--style-1">
                           <?php echo $aadharerr;?> 
                        </div>
                        <div class="input-group">
                              <input type="text" name="panno" placeholder="PAN NUMBER" class="input--style-1">
                              <?php echo $panerr;?>
                        </div>
                       
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<?php

header('location:login.php');

?>