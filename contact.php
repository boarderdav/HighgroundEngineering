<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <!--Header Short -->    
    <?php include('php/header_nav.php');?>
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="fonts/icons/flaticon.css">

    <!-- Nivo Lightbox
    ================================================== -->
    <link rel="stylesheet" href="css/nivo-lightbox.css" >
    <link rel="stylesheet" href="css/nivo_lightbox_themes/default/default.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Google Font
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat+Subrayada:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <!-- Top Navigation
    ========================-->
    <nav id="top-menu">
        <div class="container">
            <div class="row">

                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="col-sm-4 col-md-4">
                   <!-- <div class="navbar-header"> -->
                        <a href="#"><img src="img/hgs@400x120-18.svg"></a>
                    <!--</div>-->
                </div>  

                <div class="col-sm-8 col-md-8">
                    <ul class="top-links list-unstyled text-right">
                        <li class="top-contact">
                            <ol class="list-inline">
                                <li><i class="fa fa-phone"></i> : 757 - 562 - 7080</li>
                                <li><i class="fa fa-envelope-o"></i> : <?php include 'globals.php'; echo $site_email;?></li>
                            </ol>
                        </li>
                        <li>
                            <ol class="social-icons list-inline">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ol>
                        </li>
                    </ul>
                </div>  
                            
            </div>
        </div>
    </nav>

    <!-- Main Navigation
    ========================-->
    <div id="sticky-anchor"></div>
    <nav id="main-menu" class="navbar navbar-default">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myMenu">
                    <i class="fa fa-list-ul"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myMenu">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projects <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="project-2col.php">Projects - 2 Col</a></li>
                        <li><a href="project-3col.php">Projects - 3 Col</a></li>
                        <li><a href="single-project.php">Single Project</a></li>
                      </ul>
                    </li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="active"><a href="contact.php">Contact Us</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="blog.php">Blog Default</a></li>
                        <li><a href="blog-3col.php">Blog - 3 Col</a></li>
                        <li><a href="blog-2col.php">Blog - 2 Col</a></li>
                        <li><a href="single-blog.php">Single Blog Post</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="team.php">Team</a></li>
                        <li><a href="404-error.php">404 Error Page</a></li>
                        <li><a href="faqs.php">FAQs</a></li>
                        <li><a href="career.php">Career Form</a></li>
                      </ul>
                    </li>
                </ul>

                <form class="navbar-form navbar-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container -->
    </nav>

    <!-- Page Header
    ========================-->
    <div id="en-header">
        <div class="container">
            <h2 class="pull-left">Contact</h2>
            <ol class="breadcrumb pull-right">
              <li><a href="index.html">Home</a></li>
              <li class="active">Contact</li>
            </ol>
        </div>
    </div>

    <!-- Intro 
    ========================-->
    <div id="en-content">
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-sm-4 col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>We Are Ready to <br>Help You 24/7</h2>
                        <hr>
                        <p>Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda. Sedquis viverra enim.</p>
                        <a class="read-more" href="project-3col.php">View Our Works <span class="fa fa-chevron-circle-right"></span></a>

                    
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <form id="contact-form" class="form" name="sentMessage" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <!-- Your name input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <textarea class="form-control" rows="6" placeholder="Tell Us Something..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>

                        <div id="success"></div>
                        <button type="submit" class="btn btn-send en-btn dark">Send Message</button> <!-- Send button -->
                    </form>

                    <div class="clearfix"></div>
                    <div class="spacer"></div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-details">
                                <h4>Main Office Info</h4>
                                <hr>
                                <ul class="list-unstyled list-block">
                                    <li><strong>Office Hours: </strong> <br>Mon-Friday 8am - 10pm</li>
                                    <li><strong>Address: </strong> <br>601 N. Mechanic Street Franklin, VA 23851</li>
                                    <li><strong>Tell: </strong> <br>757-562-7080</li>
                                    <li><strong>Fax: </strong> <br>757-562-7081</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="contact-details">
                                <h4>Google Map Location</h4>
                                <hr>
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.294898230479!2d-74.01236055!3d40.71152420000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a19881b83fb%3A0x979b0a4fe0492ce6!2sWorld+Trade+Center%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sph!4v1424375590572"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- Other Offices
    ========================-->
    <div id="en-offices">
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-sm-4 col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>Other Offices and <br>Branches</h2>
                        <hr>
                        <a class="read-more" href="contact.php">Start a Project with Us Now <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <p><strong><em>Highground</em></strong> as one of the biggest Engineering Company in the World we have 6 other branches worldwide. As we continue to grow, we are planning to expand more of our branches from time to time. Visit the nearest branch in you place and make you Engineering Project done right. </p>

                    <div class="clearfix"></div>
                    <div class="spacer"></div>

                    <div class="row">
                        
                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>Franklin, VA Branch</h4>
                                <address>
                                    <strong>Highground</strong><br>
                                    601 N. Mechanic Street<br>
                                    Franklin, VA 23851<br>
                                    <abbr title="Phone">P:</abbr> 757-562-7080
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>Newport News, VA Branch</h4>
                                <address>
                                    <strong>Highground</strong><br>
                                    227 28th Street<br>
                                    Newport News, VA 23607<br>
                                    <abbr title="Phone">P:</abbr> 757-245-6321
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>Canada Office</h4>
                                <address>
                                    <strong>Highground Alternate Office</strong><br>
                                    Igbalangao, Bugasong, Antique<br>
                                    Philippines 5704<br>
                                    <abbr title="Phone">P:</abbr> 757-456-7890
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>Dubai Branch</h4>
                                <address>
                                    <strong>Richmond, VA Office</strong><br>
                                    200 E. Highground Street<br>
                                    Richmond, VA 23690<br>
                                    <abbr title="Phone">P:</abbr> 757-456-7890
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>China Branch</h4>
                                <address>
                                    <strong>Northern Virginia Branch</strong><br>
                                    101 Reseasrch Parkway<br>
                                    Washington, DC 09645<br>
                                    <abbr title="Phone">P:</abbr> 757-456-7890
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="offices">
                                <h4>Norfolk, VA Office</h4>
                                <address>
                                    <strong>Highground</strong><br>
                                    300 W. High Street<br>
                                    Norfolk, VA 23507<br>
                                    <abbr title="Phone">P:</abbr> 757-456-7890
                                </address>
                                <a class="read-more" href="https://www.google.com.ph/maps">View Location <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- Footer Area -->
	<?php include('php/footer.php');?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/owl.carousel.js"></script><!-- Owl Carousel Plugin -->
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script><!-- LightBox Nivo -->

    <!-- Portfolio Filter -->
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/imagesloaded.js"></script>

    <!-- Contact page-->
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
    
    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>