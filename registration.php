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





    <div class="page-wrapper  p-t-100 p-b-100 font-robo" style="background-color: LightCoral ">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
               
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form  action="aniket1.php" method="POST">
                        <div class="input-group">
                            
                           <input class="input--style-1" type="text" placeholder="NAME" name="user">
                        </div>
                        <div class="input-group">
                            <input type="email" name="email" placeholder="EMAIL" class="input--style-1">
                        </div>
                        <div class="input-group">
                             <input type="password" name="password" placeholder="PASSWORD" class="input--style-1">
                        </div>
                 
                            <div class="input-group">
                                    
                                    <input type="text" name="age" placeholder="AGE" class="input--style-1">
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
                        </div>
                        <div class="input-group">
                              <input type="text" name="panno" placeholder="PAN NUMBER" class="input--style-1">
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

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
