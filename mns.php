
<?php

session_start();


//echo $_SESSION['username'];


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MNS</title>
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/hover/hover.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/mns.css" rel="stylesheet">

  <!-- Responsive css -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">


</head>

<body>


  <nav id="main-nav">
    <div class="row">
      <div class="container">

        <div class="logo">
          <a href="index.html"><img src="https://s3.india.com/wp-content/uploads/2016/11/mns-3.jpg" alt="logo"></a>
        </div>

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
          <li><a href="index.html" class="smoothScroll">Home</a></li>
          <li><a href="#about" class="smoothScroll">About</a></li>
          <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
          <li><a href="#journal" class="smoothScroll">Blog</a></li>
          <li><a href="#contact" class="smoothScroll">Contact</a></li>
          <li><a href="mnsvoting.php" class="smoothScroll">To Vote</a></li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- End section navbar -->


  <!-- start section header -->
  <div id="header" class="home">

    
    </div>
  </div>
  <!-- End section header -->


  <!-- start section about us -->
  <div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="https://img.etimg.com/thumb/height-480,width-640,msid-63395702,imgsize-61946/raj-thackeray-bccl.jpg" class="img-responsive" alt="me">
            </div>
          </div>
        </div>
        <div class="container">
      <div class="header-content"><br><br><br><BR>
        <h1 style="color: black" >RAJ THACKAREY</h1>
        <p style="colo">POLITICIAN</p>

        <ul class="list-unstyled list-social">
          <li><a href="#"><i class="ion-social-facebook"></i></a></li>
          <li><a href="#"><i class="ion-social-twitter"></i></a></li>
          <li><a href="#"><i class="ion-social-instagram"></i></a></li>
          <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
          <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
          <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
        </ul>
      </div>
        <div class="col-lg-7">
          <div class="about-descr">

            <p class="p-heading">President Of MAHARASHTRA NAVNIRMAN SENA(MNS)</p>
            <p class="separator"></p></p>
            <p class="separator">Achievements:</p>
            <p class="separator">1: Rural Electrification</p>
            <p class="separator">2: Free LPG Cylinders</p>
            <p class="separator">3: Sanitation</p>
            <p class="separator">4: Digital Transfer Of Subsidies</p>
            <p class="separator">5: Many Foreign Policies</p>
          </div>

        </div>
      </div>
    </div>
  </div>
 



  <div id="portfolio" class="text-center paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>My Portfolio</h2>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="portfolio-list">

            <ul class="nav list-unstyled" id="portfolio-flters">
              <li class="filter filter-active" data-filter=".all">all</li>
              <li class="filter" data-filter=".branding">branding</li>
              <li class="filter" data-filter=".mockups">mockups</li>
              <li class="filter" data-filter=".uikits">ui kits</li>
              <li class="filter" data-filter=".webdesign">web design</li>
              <li class="filter" data-filter=".photography">photography</li>
            </ul>

          </div>

          <div class="portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits webdesign">
              <a class="popup-img" href="images/portfolio/1.jpg">
                <img src="https://images.indianexpress.com/2017/02/raj-thackeray-7591.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits photography">
              <a class="popup-img" href="images/portfolio/2.jpg">
                <img src="https://th.thgim.com/news/cities/mumbai/6dezxk/article24920186.ece/alternates/FREE_660/11BMMNS"  alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding webdesig photographyn">
              <a class="popup-img" href="images/portfolio/3.jpg">
                <img src="http://www.afternoondc.in/userfiles/images/19Raj%20thackery%20sabha%20shivaji%20park%20(10).jpg" alt="img">
              </a>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits photography">
              <a class="popup-img" href="images/portfolio/5.jpg">
                <img src="https://d1u4oo4rb13yy8.cloudfront.net/article/29050-fodbarhucu-1505995735.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
              <a class="popup-img" href="images/portfolio/4.jpg">
                <img src="https://st1.latestly.com/wp-content/uploads/2019/02/Raj-Thackeray-meets-Anna-Hazare-784x441.jpg" alt="img">
              </a>
            </div>

            

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits webdesign">
              <a class="popup-img" href="" alt="img">
                <img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2014/04/15/227668-roar.jpg" alt="img">
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End section portfolio -->

  <!-- End section journal -->

  */


  <!-- start sectoion contact -->
  <div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div class="row">

          <div class="col-lg-6">
            <div class="contact-contact">

              <h2 class="mb-30">GET IN TOUCH</h2>

              <ul class="contact-details">
                <li><span>THIS TIME</span></li>
                <li><span>VOTE TO BJP</span></li>
                <li><span>AB KI BAAR MODI SARKAR</span></li>
                <li><span>8879895007</span></li>
                
              </ul>

            </div>
          </div>

          <div class="col-lg-6">
            <form action="" method="post" role="form" class="contactForm">
              <div class="row">

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="col-lg-6">
                  <div class="form-group contact-block1">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <input type="submit" class="btn btn-defeault btn-send" value="Send message" href="index.html">
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- start sectoion contact -->


  <!-- start section footer -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
          <li><a href="#"><i class="ion-social-facebook"></i></a></li>
          <li><a href="#"><i class="ion-social-twitter"></i></a></li>
          <li><a href="#"><i class="ion-social-instagram"></i></a></li>
          <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
          <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
          <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
        </ul>

      </div>

      <p>&copy; Copyrights Folio. All rights reserved.</p>

     

    </div>
  </div>
  <!-- End section footer -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/typed/typed.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>
