<?php
echo '
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <title>E-Parivar</title>
  <link rel="icon" href="favicon.png" type="image/png">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">

  <!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

</head>

<body>

  <!--Header_section-->
  <header id="header_wrapper">
    <div class="container">
      <div class="header_box">
        <div class="logo"><a href="#">
            <H1><strong>e-PARIVAR</strong>
            </H1>
          </a></div>
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
              <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div id="main-nav" class="collapse navbar-collapse navStyle">
            <ul class="nav navbar-nav" id="mainNav">
              <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
              <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
              <li><a href="#service" class="scroll-link">Services</a></li>
              <!-- <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li> -->
              <!-- <li><a href="#clients" class="scroll-link">Clients</a></li>
              <li><a href="#team" class="scroll-link">Team</a></li> -->
              <li><a href="#contact" class="scroll-link">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--Header_section-->

  <!--Hero_Section-->
  <section id="hero_section" class="top_cont_outer">
    <div class="hero_wrapper">
      <div class="container">
        <div class="hero_section">
          <div class="row">
            <div class="col-lg-5 col-sm-7">
              <div class="top_left_cont zoomIn wow animated">
                <h2>Welcome to online <strong>HRMS</strong> portal</h2>
                <p>Human Resource Management (HRM, or simply HR) is a function in every
organization which is designed to increase employee performance in aligning with
employers strategic objectives. Primarily focused on how people are managed within
organizations, human resource management is driven by systems and policies. HR
involves the following sub-functions and an HRMS helps automate and streamline
them.
                </p>
                <a href="login.php" class="read_more2">Login</a>&ensp;
                <a href="signup.php" class="read_more2">Signup</a>
              </div>
            </div>
            <div class="col-lg-7 col-sm-5">
              <img src="img/main_device_image.png" class="zoomIn wow animated" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Hero_Section-->

  <section id="aboutUs">
    <!--Aboutus-->
    <div class="inner_wrapper">
      <div class="container">
        <h2>About Us</h2>
        <div class="inner_section">
          <div class="row">
            <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/about-img.jpg"
                class="img-circle delay-03s animated wow zoomIn" alt=""></div>
            <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
              <div class=" delay-01s animated fadeInDown wow animated">
                <h3>What Constitutes us..</h3><br />
                <p>
                An HRMS (Human Resource Management System) is a type of HR software that
enables the management of several HR functions through the use of information
technology.
An HRMS aims to improve the productivity and efficiency of the business through the
automation of manual and repetitive tasks. This, in turn, also frees up the HR teams
time. The additional bandwidth can then be used to address more strategic, businesscritical
tasks in the human resource management function.</p>
              </div>
              <div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact
                  Us</a> </div>
            </div>

          </div>


        </div>
      </div>
    </div>
  </section>
  <!--Aboutus-->


  <!--Service-->
  <section id="service">
    <div class="container">
      <h2>Services</h2>
      <div class="service_wrapper">
        <div class="row">
          <div class="col-lg-4">
            <div class="service_block">
              <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-android"></i></span>
              </div>
              <h3 class="animated fadeInUp wow">Admin</h3>
              <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the d standard dummy text.</p>
            </div>
          </div>
          <div class="col-lg-4 borderLeft">
            <div class="service_block">
              <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-users"></i></span>
              </div>
              <h3 class="animated fadeInUp wow">Employees</h3>
              <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the d standard dummy text.</p>
            </div>
          </div>
          
          
          
        </div>
      </div>
    </div>
  </section>
  <!--Service-->





  <!--Footer-->
  <footer class="footer_wrapper" id="contact">
    <div class="container">
      <section class="page_section contact" id="contact">
        <div class="contact_section">
          <h2>Contact Us</h2>
          <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 wow fadeInLeft">
            <div class="contact_info">
              <div class="detail">
                <h4>e-PARIVAR HQ</h4>
                <p>859, Kalyan Ghat Rd, Kol-82</p>
              </div>
              <div class="detail">
                <h4>call us</h4>
                <p>9748537451</p>
              </div>
              <div class="detail">
                <h4>Email us</h4>
                <p>somaydas02@gmail.com</p>
              </div>
            </div>



            
          </div>
          
      </section>
    </div>
    <div class="container">
      <div class="footer_bottom"><span>Copyright © 2022, <strong>Somay</strong>.
        </span> </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="js/jquery.nav.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>
';
