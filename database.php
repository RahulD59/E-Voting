<?php

session_start();


$dbname="sessionpractical";
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password,$dbname);
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
$region=$_POST['region'];
$aadharno=$_POST['aadharno'];
$panno=$_POST['panno'];
$status="false";

if(strlen($name)==0&&strlen($email)==0&&strlen($pass)==0&&strlen($age)==0&&strlen($region)==0&&strlen($aadharno)==0&&strlen($panno)==0)
{

}
else{
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
  
     header('location:login.php');
  }


}


?>
        