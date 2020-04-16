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

        $row = mysqli_fetch_array($result1);
  

        $row2=mysqli_fetch_array($result2);
        

        $row3=mysqli_fetch_array($result3);
        

        $row4=mysqli_fetch_array($result4);
        

        $row5=mysqli_fetch_array($result5);
      

        $row6=mysqli_fetch_array($result6);
        
        
        if($row['cbjp'] > $row2['ccongress']  && $row['cbjp'] > $row3['cmanse'] && $row['cbjp'] > $row5['caap'] && $row['cbjp'] > $row6['cbsp'] && $row['cbjp'] > $row4['cshivsena']) //$row['cbjp'] > $row4['cshivsena'] && $row['cbjp'] > $row5['caap'] && $row['cbjp']>$row6['cbsp']
        {
            header('location:bjpwon.php');
            echo "BHARTIYA JANTA PARTY WON HAS WON BY".$row['cbjp'];
        }
        else if($row2['ccongress'] > $row['cbjp']  && $row2['ccongress'] > $row3['cmanse'] && $row2['ccongress'] > $row5['caap'] && $row2['ccongress'] > $row6['cbsp'] && $row2['ccongress'] > $row4['cshivsena'] )
        {   
                header('location:congresswon.bjp');
                echo "INDIAN NATIONAL CONGRESS WON";
        }
        else if($row3['cmanse'] > $row2['ccongress']  && $row3['cmanse'] > $row['cbjp'] && $row3['cmanse'] > $row5['caap'] && $row3['cmanse'] > $row6['cbsp'] && $row3['cmanse'] > $row4['cshivsena'])
        {
                header('location:mansewon.php');
                echo "MAHARASHTRA NAVNIRMAN SENA WON";
        }
        else if($row4['cshivsena'] > $row2['ccongress']  && $row4['cshivsena'] > $row['cbjp'] && $row4['cshivsena'] > $row5['caap'] && $row4['cshivsena'] > $row6['cbsp'] && $row4['cshivsena'] > $row3['cmanse'])
        {
           
                        header('location:shivsenawon.php');
            echo "SHIVSENA WON by ".$row4['cshivsena']." VOTES";

        }
        else if($row5['caap'] > $row2['ccongress']  && $row5['caap'] > $row3['cmanse'] && $row5['caap'] > $row['cbjp'] && $row5['caap'] > $row6['cbsp'] && $row5['caap'] > $row4['cshivsena'])
        {
            header('location:aapwon.php');
            echo "AAM AADMI PARTY WON";
        }
        else if($row6['cbsp'] > $row2['ccongress']  && $row6['cbsp'] > $row3['cmanse'] && $row6['cbsp'] > $row5['caap'] && $row6['cbsp'] > $row['cbjp'] && $row6['cbjp'] > $row4['cshivsena'])
        {
            header('location:bspwon.php');
            echo "BAHUJAN SAMAJ PARTY WON";
        }
        else
        {
                echo "TIE BETWEEN TWO TEAMS";
        }


       

?>

<html>
        <body>
                <h1><a href="login.php">LOGOUUT</a></h1>
</body>
        </html>