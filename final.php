<html>
<head>

<title>ELECTION VOTING</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<?php
// define variables and set to empty values
$nameerr = $emailerr = $passerr =$cnoerr=$aadharerr=$panerr=$ageerr="";
$name = $email =$pass = $cno= $aadharno=$panno=$age="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameerr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9]*$/",$name)) {
      $nameerr = "Only letters and numbers required "; 
    }
  }
  if (empty($_POST["cno"])) {
    $cnoerr = "Mobile number is required";
  } else {
    $cno = test_input($_POST["cno"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]{10,10}$/",$cno)) {
      $cnoerr = "Only 10 digits allowed "; 
    }
  }
  if (empty($_POST["email"])) {
    $emailerr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[a-zA-Z0-9\.]*@[a-z\.]{1,}[a-z]*$/",$email)) {
      $emailerr = "Does not match the standard form "; 
    }
  }

  if (empty($_POST["pass"])) {
    $passerr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9]*$/",$pass)) {
      $passerr = "Enter minimum 8 characters "; 
    }
  }

  if (empty($_POST["age"])) {
    $ageerr = "Mobile number is required";
  } else {
    $age = test_input($_POST["age"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]{10,10}$/",$age)) {
      $ageerr = "Only 10 digits allowed "; 
    }
  }


  if (empty($_POST["aadharno"])) {
    $aadharerr = "AADHAR NO IS REQUIRED";
  } else {
    $aadharno =test_input($_POST["aadharno"]);
    if(!preg_match("/^[0-9]{12,12}$/",$aadharno)){
        $aadharerr = "ENTER A VALID AADHAR NO";
    }
  }

  if (empty($_POST["panno"])) {
    $panerr = "PAN NO IS REQUIRED";
  } else {
    $panno =test_input($_POST["panno"]);
    if(!preg_match("/^[0-9]{10,10}$/",$panno)){
        $panerr = "ENTER A VALID PANCARD NO";
    }
  }

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  $dbname="registration";
  $servername="localhost";
  $username="root";
  $password="";
  
  $conn=mysqli_connect($servername,$username,$password,$dbname);

  $sql="INSERT INTO signup(NAME,EMAIL,PASSWORD,CONTACTNO,AGE,AADHARNO,PANCARDNO)VALUES('".$name."','".$email."','".$pass."','.$cno.','.$age.','.$aadharno.','.$panno.')";
  if($conn->query($sql)===TRUE)
  echo "INSERTED TO DATABASE";
  else
  echo $conn->error;

?>

<marquee width="100%" direction="left" height="10%">
                <h1>ONLINE VOTING REGISTRATION FORM</h1>
            </marquee>
            
            <form class="form-horizontal" method="POST" action="final.php">
            <div class="form-group">
              <label class="control-label col-sm-3" ><b >NAME:</b></label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="name" placeholder="ENTER FULL NAME..">
                <span class="error">*<?php echo $nameerr;?></span><br>
              </div>
            </div>
            <br>
           
                <div class="form-group">
                  <label class="control-label col-sm-3" ><b >EMAIL:</b></label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="email" placeholder=" ENTER EMAIL..">
                    <span class="error">*<?php echo $emailerr;?></span><br>
                  </div>
                </div>
                <br>
                <div class="form-group">
                        <label class="control-label col-sm-3" ><b >PASSWORD:</b></label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" name="pass" placeholder=" ENTER PASSWORD..">
                          <span class="error">*<?php echo $passerr;?></span><br>
                        </div>
                      </div>
                      <br>
               
                    <div class="form-group">
                      <label class="control-label col-sm-3" ><b >CONTACT:</b></label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="cno" placeholder="ENTER CONTACT NO..">
                        <span class="error">*<?php echo $cnoerr;?></span><br>
                      </div>
                    </div>
                    <div class="form-group">
                            <label class="control-label col-sm-3" ><b >AGE:</b></label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" name="age" placeholder="ENTER AGE..">
                              <span class="error">*<?php echo $ageerr;?></span><br>
                            </div>
                          </div>
                          <br>
                          <div class="form-group">
                                <label class="control-label col-sm-3" ><b >GENDER:</b></label>
                                <div class="col-sm-2">
                            <input type="radio" name="gender" value="male" checked><b>MALE</b><br>
                            <input type="radio" name="gender" value="female"><b>FEMALE</b><br>
                            <input type="radio" name="gender" value="other"><b>OTHER</b><br>
                            
                          </div>
                          </div>

                          <div class="form-group">
                                <label class="control-label col-sm-3" ><b >AADHAR NO:</b></label>
                                <div class="col-sm-2  ">
                                  <input type="text" class="form-control" name="aadharno" placeholder="ENTER AADHAR NO..">
                                  <span class="error">*<?php echo $aadharerr;?></span><br>
                                </div>
                              </div>
                              <div class="form-group">
                                    <label class="control-label col-sm-3" ><b > PANCARD NO:</b></label>
                                    <div class="col-sm-2  ">
                                      <input type="text" class="form-control" name="panno" placeholder="ENTER PANCARD NO..">
                                      <span class="error">*<?php echo $panerr;?></span><br>
                                    </div>
                                  </div>
                                
                                <div class="checkbox">
                                        <label class="control-label col-sm-4"><input type="checkbox" name="remember"><b>REMEMBER ME</b>  </label>
                                      </div><br>
                                      <div class="col-sm-10">
                                      <button type="submit"  class="btn btn-primary" onclick="login.php" >Submit</button></div>  
                                    </form>
                          




</body>
</html>