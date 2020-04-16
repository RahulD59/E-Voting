<?


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
    $sql2="Create trigger AGE_TRIGGER on signin before insert begin if signin.age <18 then SQL_STATE='4500' SET_MESSAGE='ERROR' end;"
    mysqli_query($conn,$sql2);
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

?>
        



?>