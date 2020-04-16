<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="form.php" method="post" style="max-width:500px;margin:auto">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Firstname" name="username">
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Lastname" name="username">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="Phone Number" name="number">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <div class="input-container">
    <i class="fa fa-history icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="cpsw">
  </div>

  <button type="submit" class="btn">Register</button>
</form>


<?php
   

   $un = $_POST["username"]; 
   if(preg_match("/^[_a-z0-9]+(\.[_a-z0-9-]+)*/",$un))
   {
    echo "<br>Valid Username";
   }
   else
   {
    echo "<br>Username NOT valid";
   }

   $mail = $_POST["email"]; 
   if(preg_match("/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$mail))
   {
    echo "<br>Valid Email";
   }
   else
   {
    echo "<br>Email NOT valid";
   }


   $phone = $_POST["number"]; 
   if(preg_match("/^[6-9][0-9]{9}$/",$phone))
   {
    echo "<br>Valid Phone Number";
   }
   else
   {
    echo "<br>Phone number NOT valid";
   }


  $password = $_POST["psw"];
  $pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,}$/';
  if(preg_match($pattern, $password))
  {
    echo "<br>Password strength is OK";
  } 
  else 
  {
   echo "<br>Password is not strong enough";
  }

  $conpassword = $_POST["cpsw"];
  if($conpassword == $password)
  {
    echo "<br>Password Confirmed";
  } 
  else 
  {
   echo "<br>Enter Password again";
  }

?>
</body>
</html>
