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
                    <li class="dropdown active">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li class="active"><a href="team.php">Team</a></li>
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
            <h2 class="pull-left">Team</h2>
            <ol class="breadcrumb pull-right">
              <li><a href="index.html">Home</a></li>
              <li class="active">Team</li>
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
                        <h2>Meet the People <br>Behind Highground</h2>
                        <hr>
                        <p>Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda. Sedquis viverra enim.</p>
                        
                        <a class="read-more" href="about.php">Our History <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <p class="lead">This is the lead paragraphy about the company team and employees. Nulla interdum dapibus erat nec elementum. Fusce aliquet tempor mi, vitae sollicitudin arcu convallis id.</p>

                    <h4>Heads and Board Members</h4>
                    <p><strong><em>Highground</em></strong> has been established on 1990 and had been running for about 15 years now. We have helped hundreds of businesses succeed with their engineering projects. <strong><em><a href="team.php">Our team of engineers</a></em></strong> work hard together to provide each of our trusted partners and clients the best output that no other engineering companies can offer.</p>

                    <div class="clearfix"></div>
                    <br>

                    <div class="row">

                        <div class="col-sm-6 col-md-4">
                            <div class="team post-img thumbnail">
                              <img src="http://placehold.it/600x700" alt="...">
                              <div class="caption">
                                <h5 class="text-uppercase">Engr. Abu Osama Phd.</h5>
                                <p><em>Founder and CEO</em></p>
                                <small>
                                    Fusce aliquet tempor mi, vitae sollicitudin arcu convallis id. In id vestibulum sapien. Praesent eget bibendum purus, placerat dui. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                              </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="team post-img thumbnail">
                              <img src="http://placehold.it/600x700" alt="...">
                              <div class="caption">
                                <h5 class="text-uppercase">Engr. Leo Flores</h5>
                                <p><em>Founder and Asst. CEO</em></p>
                                <small>
                                    Praesent eget bibendum purus, quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                              </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="team post-img thumbnail">
                              <img src="http://placehold.it/600x700" alt="...">
                              <div class="caption">
                                <h5 class="text-uppercase">Engr. Liza Marie Johnes</h5>
                                <p><em>Finance President</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                              </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4">
                            <div class="team post-img thumbnail">
                              <img src="http://placehold.it/600x700" alt="...">
                              <div class="caption">
                                <h5 class="text-uppercase">Engr. Abu Osama Phd.</h5>
                                <p><em>Founder and CEO</em></p>
                                <small>
                                    Fusce aliquet tempor mi, vitae sollicitudin arcu convallis id. In id vestibulum sapien. Praesent eget bibendum purus, quis dui. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="team post-img thumbnail">
                              <img src="http://placehold.it/600x700" alt="...">
                              <div class="caption">
                                <h5 class="text-uppercase">Engr. Leo Flores</h5>
                                <p><em>Founder and Asst. CEO</em></p>
                                <small>
                                    Praesent eget bibendum purus, quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="team post-img thumbnail">
                              <img src="http://placehold.it/600x700" alt="...">
                              <div class="caption">
                                <h5 class="text-uppercase">Engr. Liza Marie Johnes</h5>
                                <p><em>Finance President</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                              </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- End History Section -->
        
    </div>

    <!-- Team Members
    ========================-->
    <div id="en-team">
        <div class="container">
            <!-- Left Content 4 Cols -->
            <div class="section-title text-center"> <!-- Left Section Title -->
                <h2>Company Engineers</h2>
                <hr>
                <p>Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda. Sedquis viverra enim.</p>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. Arianne Y.</h5>
                                <p><em>Administrative Chairman</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. YenYen Ped</h5>
                                <p><em>Executive Director</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. Razlle Davila</h5>
                                <p><em>Civil Eng. Director</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. Lianne Joy</h5>
                                <p><em>Managent Officer</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. Arianne Y.</h5>
                                <p><em>Administrative Chairman</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. YenYen Ped</h5>
                                <p><em>Executive Director</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. Razlle Davila</h5>
                                <p><em>Civil Eng. Director</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. Lianne Joy</h5>
                                <p><em>Managent Officer</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. Arianne Y.</h5>
                                <p><em>Administrative Chairman</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. YenYen Ped</h5>
                                <p><em>Executive Director</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. Razlle Davila</h5>
                                <p><em>Civil Eng. Director</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="team">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h5 class="text-uppercase">Engr. Lianne Joy</h5>
                                <p><em>Managent Officer</em></p>
                                <small>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium atque corrupti quos dolores et quas. 
                                    <br>
                                    <br>
                                    <a class="read-more" href="#">Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                            <img src="http://placehold.it/600x800" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Careers or Open Position
    ========================-->
    <div id="en-career">
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-sm-4 col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>Be Part of <br>Our Team</h2>
                        <hr> 
                        <p>If you think you are competent enough to excel in you career check out our aviable position.</p>
                        <a class="read-more" href="career.php">Apply Now <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <p class="lead">Are you interested to be part of our excellent team?<strong><em>Highground</em></strong> only employs competent engineers to assure quality and best output for each projects.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                    <div class="clearfix"></div>
                    <div class="smallspacer"></div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="career-position">
                                <i class="icons flaticon-construction17"></i>
                                <h5>Mechanical Engineers</h5>
                                <h6>120 Available Positions</h6>
                                <small>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit ani.
                                    <br>
                                    <br>
                                    <a class="read-more" href="career.php">Details <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="career-position">
                                <i class="icons flaticon-rounded45"></i>
                                <h5>Civil Engineers</h5>
                                <h6>360 Available Positions</h6>
                                <small>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <br>
                                    <br>
                                    <a class="read-more" href="career.php">Details <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="career-position">
                                <i class="icons flaticon-architecture"></i>
                                <h5>Architects</h5>
                                <h6>160 Available Positions</h6>
                                <small>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <br>
                                    <br>
                                    <a class="read-more" href="career.php">Details <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="career-position">
                                <i class="icons flaticon-construction10"></i>
                                <h5>Construction Workers</h5>
                                <h6>2180 Available Positions</h6>
                                <small>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <br>
                                    <br>
                                    <a class="read-more" href="career.php">Details <span class="fa fa-chevron-circle-right"></span></a>
                                </small>
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