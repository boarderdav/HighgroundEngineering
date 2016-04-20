<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <!-- Header short -->
    <?php include('../php/header_nav.php');?>
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../fonts/icons/flaticon.css">

    <!-- Nivo Lightbox
    ================================================== -->
    <link rel="stylesheet" href="../css/nivo-lightbox.css" >
    <link rel="stylesheet" href="../css/nivo_lightbox_themes/default/default.css">

    <!-- Slider
    ================================================== -->
    <link href="../css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="../css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

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
                                <li><i class="fa fa-envelope-o"></i> : <?php include '../globals.php'; echo
                                    $site_email;?></li>
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
                    <li><a href="../index.html">Home</a></li>
                    <li class="active"><a href="../services.php">Services</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projects <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="../project-2col.php">Projects - 2 Col</a></li>
                        <li><a href="../project-3col.php">Projects - 3 Col</a></li>
                        <li><a href="../single-project.php">Single Project</a></li>
                      </ul>
                    </li>
                    <li><a href="../about.php">About Us</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="../awards.php">Blog Default</a></li>
                        <li><a href="../awards-3col.php">Blog - 3 Col</a></li>
                        <li><a href="../awards-2col.php">Blog - 2 Col</a></li>
                        <li><a href="../single-blog.php">Single Blog Post</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="../team.php">Team</a></li>
                        <li><a href="../404-error.php">404 Error Page</a></li>
                        <li><a href="../faqs.php">FAQs</a></li>
                        <li><a href="../career.php">Career Form</a></li>
                      </ul>
                    </li>
                </ul>

                <form class="navbar-form navbar-right" role="search">
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default noradius" type="button"><i class="fa fa-search"></i></button>
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
            <h2 class="pull-left">Services</h2>
            <ol class="breadcrumb pull-right">
              <li><a href="../index.html">Home</a></li>
              <li><a href="../services.php">Services</a></li>
              <li class="active">Industrial Engineering</li>
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
                        <h2>Industrial Engineering <br>Services</h2>
                        <hr>
                        <small>We are backed by a prolific team of professionals to carry out our business processes in a systematic manner. </small>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <p>Our team comprises qualified electrical engineers, quality controllers, research & development, warehousing and packaging personnels and logistic personnels. All the team members work in coordination to achieve the goals of our organization as well as to maximize the level of satisfaction of our customers. Our quality controllers conduct various stringent tests on the products to offer a flawless range to our esteemed customers.</p>

                    <a class="read-more" href="../services.php">All Services <span class="fa fa-chevron-circle-right"></span></a>
                </div>

            </div>
        </div>

        <div class="container">

            <div class="clearfix"></div>
            <div class="smallspacer"></div>

            <div class="row">
                <div class="col-md-6 img">
                    <div id="imageSlider" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
                            <li data-target="#imageSlider" data-slide-to="1"></li>
                            <li data-target="#imageSlider" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <img src="http://placehold.it/880x500" alt="...">
                            </div>
                            <div class="item">
                              <img src="http://placehold.it/880x500" alt="...">
                            </div>
                            <div class="item">
                              <img src="http://placehold.it/880x500" alt="...">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <h4>Industrial Project Management Services</h4>
                    <p>We don’t consult in an industry unless we have mastered its challenges and demonstrated improvements. In many cases, we have developed specific software solutions, project management protocols, and diagnostic equipment to streamline processes.</p>
                    <p>We leading the future of electrification with advanced technologies that distribute, protect and control. We provide customers, across various industries, with end-to-end product and service solutions that ensure the reliability and protection of the electrical infrastructure; from the power station to the end point and the sustainable power technologies in between.</p>
                    <a class="read-more" href="../project-3col.php">View Our Works <span class="fa fa-chevron-circle-right"></span></a>
                </div>

            </div>

            <div class="clearfix"></div>
            <div class="smallspacer"></div>

            <div class="row">

                <div class="col-xs-6 col-sm-3 col-md-3 img">
                    <img src="http://placehold.it/400x400" alt="..." class="img-responsive">
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 img">
                    <img src="http://placehold.it/400x400" alt="..." class="img-responsive">
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 img">
                    <img src="http://placehold.it/400x400" alt="..." class="img-responsive">
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 img">
                    <img src="http://placehold.it/400x400" alt="..." class="img-responsive">
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="smallspacer"></div>

            <div class="row">

                <div class="col-sm-6 col-md-6">
                    <h4>System Repair Installation</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Suspendisse eget felis eget nulla placerat luctus id quis sapien. Sed metus felis, euismod et euismod et, feugiat viverra diam.felis tortor, euismod ac tortor ut. Quisque nec erat erat.</p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <h4>Plantation Construction and Management</h4>
                    <p>Suspendisse eget felis eget nulla placerat luctus id quis sapien. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Sed metus felis, euismod et euismod et, feugiat viverra diam.felis tortor, euismod ac tortor ut. Quisque nec erat erat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- CTA
    ========================-->
    <div class="en-cta">
        <div class="overlay color">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Looking for the Best Engineering Solution for your Project?</h2>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-default en-btn light" href="contact.html" role="button">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Area -->
	<?php include('../php/footer.php');?>

    </body>
</html>