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
                    <li class="active"><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
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
            <h2 class="pull-left">About the Company</h2>
            <ol class="breadcrumb pull-right">
              <li><a href="index.html">Home</a></li>
              <li class="active">About</li>
            </ol>
        </div>
    </div>

    <!-- Page Content
    ========================-->
    <div id="en-content">
    
        <!-- Company History
        ========================-->
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-sm-4 col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>Our <br>History</h2>
                        <hr>
                        <p>Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda. Sedquis viverra enim.</p>
                        
                        <div id="popup">
                            <a class="read-more" href="https://www.youtube.com/watch?v=L9szn1QQfas">Watch Video For More Info <span class="fa fa-chevron-circle-right"></span></a>
                        </div>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <p class="lead">This is the lead paragraphy about the company history. Nulla interdum dapibus erat nec elementum. Fusce aliquet tempor mi, vitae sollicitudin arcu convallis id. In id vestibulum sapien. Praesent eget bibendum purus, quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies.</p>

                    <h4>Running Since 1990</h4>
                    <p><strong><em>Highground INC.</em></strong> has been established on 1990 and had been running for about 15 years now. We have helped hundreds of businesses succeed with their engineering projects. Have built about $562,000,000,000.00 billions worth projects since then and continually growing faster as time passes by.</p>

                    <div class="clearfix"></div>
                    <br>

                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="post-img thumbnail">
                              <img src="http://placehold.it/600x400" alt="...">
                              <div class="caption">
                                <small>The Founders in 1990</small>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="post-img thumbnail">
                              <img src="http://placehold.it/600x400" alt="...">
                              <div class="caption">
                                <small>First Project Completed Worth $3 Million</small>
                              </div>
                            </div>
                        </div>
                    </div>

                    <h4>Our Professionalism</h4>
                    <p><strong><em>Highground</em></strong> only employs competent engineers to assure quality and best output for each projects. Fusce aliquet tempor mi, vitae sollicitudin arcu convallis id. In id vestibulum sapien. Praesent eget bibendum purus, quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies. <strong><em><a href="team.php">Our team of engineers</a></em></strong> work hard together to provide each of our trusted partners and clients the best output that no other engineering companies can offer.</p>

                    <a class="read-more" href="team.php">View Our Team <span class="fa fa-chevron-circle-right"></span></a>
                    <div class="clearfix"></div>
                    <br>
                    <div class="post-img thumbnail">
                        <img src="http://placehold.it/800x500" alt="...">
                        <div class="caption">
                            <small>The Highground Family</small>
                        </div>
                    </div>

                    <h4>Why Work with Us</h4>
                    <p><strong><em>Highground</em></strong> only employs competent engineers to assure quality and best output for each projects. Fusce aliquet tempor mi, vitae sollicitudin arcu convallis id. In id vestibulum sapien. Praesent eget bibendum purus, quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies. </p>

                    <a class="read-more" href="career.php">Careers and Opportunities <span class="fa fa-chevron-circle-right"></span></a>
                </div>
            </div>
        </div> <!-- End History Section -->
        
    </div>

    <!-- Values/Mission/Vision
    ========================-->
    <div class="en-values">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 text-left nopadding">
                    <div class="values c1">
                        <div class="detail">
                            <span class="icons flaticon-construction14"></span>
                            <h2>Our Values</h2>
                            <h4>"Quality Comes First"</h4>
                            <hr>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-left nopadding">
                    <div class="values c2">
                        <div class="detail">
                            <span class="icons flaticon-businessman118"></span>
                            <h2>Vision</h2>
                            <h4>"We Aim for the Top"</h4>
                            <hr>
                            <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-left nopadding">
                    <div class="values c3">
                        <div class="detail">
                            <span class="icons flaticon-city21"></span>
                            <h2>Mission</h2>
                            <h4>"Innovation in the Field of Engineering"</h4>
                            <hr>
                            <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Us Section
    ========================-->
        <div id="en-why-us">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe src="https://www.youtube.com/embed/L9szn1QQfas" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="section-title text-left"><!-- Centered Section Title -->
                            <h2>Why Choose Us</h2>
                            <hr>
                            <p>Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda. Sedquis viverra enim. </p>
                        </div>
                        <br>

                        <ul class="list-unstyled list-block">
                            <li><i class="fa fa-check-square"></i>Sunt in culpa qui officia deserunt mollit anim id est</li>
                            <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li><i class="fa fa-check-square"></i>Excepteur sint occaecat cupidatat non sunt in culpa qui.</li>
                            <li><i class="fa fa-check-square"></i>Donec nec justo eget felis facilisis fermentum.</li>
                            <li><i class="fa fa-check-square"></i>Mollit anim id est laborum.</li>
                            <li><i class="fa fa-check-square"></i>Erat at arcu ornare, ac scelerisque justo porta.</li>
                            <li><i class="fa fa-check-square"></i>Nec tellus condimentum, malesuada nisi fringilla.</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div><!-- End Why Us Section -->
    
    <!-- Awards and Recognition
    ========================-->
    <div id="en-awards">
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-sm-4 col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>Awards and <br>Recognation</h2>
                        <hr>
                        <small>Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda. Sedquis viverra enim.</small>
                        <div class="clearfix"></div>
                        <br>
                        <a class="read-more" href="contact.php">Start a Project with Us Now <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <div class="row text-center">
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="awards">
                                <i class="icons flaticon-winner11"></i>
                                <h5>World s Top Engineering Award</h5>
                                <small>2013 - current</small>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="awards">
                                <i class="icons flaticon-diploma20"></i>
                                <h5>Most Eng. Safety Company</h5>
                                <small>2014 - 2015</small>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="awards">
                                <i class="icons flaticon-award18"></i>
                                <h5>Outstanding Company in the US</h5>
                                <small>2008 - 2011</small>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="awards">
                                <i class="icons flaticon-first"></i>
                                <h5>Professional Awards for Engineers</h5>
                                <small>2011 - 2015</small>
                            </div>
                        </div>
                    </div>

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
                        <a class="btn btn-default en-btn light" href="contact.php" role="button">Get Started Now</a>
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
    
    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>