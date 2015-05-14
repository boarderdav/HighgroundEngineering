<!DOCTYPE html>
<html lang="en"><head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compat
    
    
    ible" content="IE=9" /><![endif]-->
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
                    <li><a href="index.php">Home</a></li>
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
                    <li class="dropdown active">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li class="active"><a href="blog.php">Blog Default</a></li>
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
            <h2 class="pull-left">News / Blog</h2>
            <ol class="breadcrumb pull-right">
              <li><a href="index.php">Home</a></li>
              <li class="active">News Blog</li>
            </ol>
        </div>
    </div>

    <!-- Page Content
    ========================-->
    <div id="en-content">
        <div class="container">

            <div id="blogposts" class="row">
                <!-- Blog Posts Content -->
                <div class="col-md-8">

                    <div class="news"> <!-- Blog Post/News #1 -->
                        <div class="featured-img">
                            <img src="http://placehold.it/800x500" alt="..." class="img-responsive">
                            <span class="meta-date"><i class="fa fa-calendar"></i> March 25, 2015</span>
                        </div>
                        
                        <a href="single-blog.php"><h3>Map Out And Show Appealing Business Design Architecture</h3></a>
                        <hr>
                        <p class="meta">
                            <span class="meta-tags">
                                <i class="fa fa-tags"></i> 
                                <a href="#">Architecture</a>
                            </span> 
                            <span class="meta-comments">
                                <i class="fa fa-comments"></i> 
                                <a href="">20 Comments</a>
                            </span>
                        </p>
                        <p>So you want to put up a business? Before you proceed, where do the funds come from? Would you take out a loan? Do you have the sufficient funds to settle all potential obligations and expenses in setting up your dream company? Do you have the sufficient funds to settle all potential obligations and expenses in setting up your dream company?...</p>
                        <a class="read-more" href="single-blog.php">Read More <span class="fa fa-chevron-circle-right"></span></a>
                    </div>

                    <div class="news"> <!-- Blog Post/News #2 -->
                        <div class="featured-img">
                            <img src="http://placehold.it/800x500" alt="..." class="img-responsive">
                            <span class="meta-date"><i class="fa fa-calendar"></i> March 12, 2015</span>
                        </div>
                        <a href="single-blog.php"><h3>Construction Going Green - Green Architecture</h3></a>
                        <hr>
                        <p class="meta">
                            <span class="meta-tags">
                                <i class="fa fa-tags"></i> 
                                <a href="#">Architecture</a>
                            </span> 
                            <span class="meta-comments">
                                <i class="fa fa-comments"></i> 
                                <a href="">6 Comments</a>
                            </span>
                        </p>
                        <p>Our planet is really feeling the heat of Global Warming. Humans are consuming resources like never before. A new coal-fired power plant is built in China EVERY WEEK! This all signifies that consumption of raw materials will keep on increasing. A new coal-fired power plant is built in China EVERY WEEK! This all signifies that consumption of raw materials will keep on increasing...</p>
                        <a class="read-more" href="single-blog.php">Read More <span class="fa fa-chevron-circle-right"></span></a>
                    </div>

                    <div class="news"> <!-- Blog Post/News #3 -->
                        <div class="featured-img">
                            <img src="http://placehold.it/800x500" alt="..." class="img-responsive">
                            <span class="meta-date"><i class="fa fa-calendar"></i> March 6, 2015</span>
                        </div>
                        <a href="single-blog.php"><h3>New Or Used Construction Equipment - The Return On Investment Decision</h3></a>
                        <hr>
                        <p class="meta">
                            <span class="meta-tags">
                                <i class="fa fa-tags"></i> 
                                <a href="#">Contruction</a>,
                                <a href="#">Civil</a>
                            </span> 
                            <span class="meta-comments">
                                <i class="fa fa-comments"></i> 
                                <a href="">2 Comments</a>
                            </span>
                        </p>
                        <p>It has always been a debate whether to buy new or used construction equipment. Smaller fleets prefer to buy used construction equipment as they attract less capital investments. Another reason for people to opt for used. Smaller fleets prefer to buy used construction equipment as they attract less capital investments. Another reason for people to opt for used...</p>
                        <a class="read-more" href="single-blog.php">Read More <span class="fa fa-chevron-circle-right"></span></a>
                    </div>

                    <div class="news"> <!-- Blog Post/News #3 -->
                        <div class="featured-img">
                            <img src="http://placehold.it/800x500" alt="..." class="img-responsive">
                            <span class="meta-date"><i class="fa fa-calendar"></i> March 6, 2015</span>
                        </div>
                        <a href="single-blog.php"><h3>Sed vel malesuada ipsum ras pulvinar quam et justo luctusibused urna lorem euismod noi</h3></a>
                        <hr>
                        <p class="meta">
                            <span class="meta-tags">
                                <i class="fa fa-tags"></i> 
                                <a href="#">Contruction</a>,
                                <a href="#">Civil</a>
                            </span> 
                            <span class="meta-comments">
                                <i class="fa fa-comments"></i> 
                                <a href="">2 Comments</a>
                            </span>
                        </p>
                        <p>It has always been a debate whether to buy new or used construction equipment. Smaller fleets prefer to buy used construction equipment as they attract less capital investments. Another reason for people to opt for used. Smaller fleets prefer to buy used construction equipment as they attract less capital investments. Another reason for people to opt for used...</p>
                        <a class="read-more" href="single-blog.php">Read More <span class="fa fa-chevron-circle-right"></span></a>
                    </div>

                    <!-- Pagination -->
                    <div class="text-center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                        </ul>
                    </div>

                </div> <!-- End Blog Posts Content -->

                <!-- Sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">

                        <div class="sidebar-widget search">
                            <div class="widget-title text-left">
                                <h4>Search Blog</h4>
                                <hr>
                            </div>

                            <form role="search">
                                <div class="input-group form-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default noradius" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>

                        </div>

                        <div class="sidebar-widget recent-posts">
                            <div class="widget-title text-left">
                                <h4>Recent Posts</h4>
                                <hr>
                            </div>

                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                      <img class="media-object" alt="74x64" src="http://placehold.it/64x74">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <a href="#"><h5>Map Out And Show Appealing Business Design Architecture</h5></a>
                                    <small>
                                        <span class="meta-date"><i class="fa fa-calendar"></i> 30 mins ago</span>
                                        <span class="meta-comments"><i class="fa fa-comments"></i> <a href="#">2 comments</a></span>
                                    </small>
                                  </div>
                            </div>

                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                      <img class="media-object" alt="74x64" src="http://placehold.it/64x74">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <a href="#"><h5>Construction Going Green - Green Architecture</h5></a>
                                    <small>
                                        <span class="meta-date"><i class="fa fa-calendar"></i> 1 day ago</span>
                                        <span class="meta-comments"><i class="fa fa-comments"></i> <a href="#">21 comments</a></span>
                                    </small>
                                  </div>
                            </div>

                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                      <img class="media-object" alt="74x64" src="http://placehold.it/64x74">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <a href="#"><h5>Map Out And Show Appealing Business Design Architecture</h5></a>
                                    <small>
                                        <span class="meta-date"><i class="fa fa-calendar"></i> 6 days ago</span>
                                        <span class="meta-comments"><i class="fa fa-comments"></i> <a href="#">356 comments</a></span>
                                    </small>
                                  </div>
                            </div>

                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                      <img class="media-object" alt="74x64" src="http://placehold.it/64x74">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <a href="#"><h5>Construction Going Green - Green Architecture</h5></a>
                                    <small>
                                        <span class="meta-date"><i class="fa fa-calendar"></i> 1 week ago</span>
                                        <span class="meta-comments"><i class="fa fa-comments"></i> <a href="#">427 comments</a></span>
                                    </small>
                                  </div>
                            </div>

                        </div>

                        <div class="sidebar-widget categories">
                            <div class="widget-title text-left">
                                <h4>Categories</h4>
                                <hr>
                            </div>

                            <ul class="list-unstyled list-block">
                                <li><i class="fa fa-angle-double-right"></i><a href="#">Civil and Architecture (3)</a></li>
                                <li><i class="fa fa-angle-double-right"></i> <a href="#">Mechanical Engineering (12)</a></li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#">Industrial Engineering (5)</a></li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#">Electrical and Electronics (1)</a></li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#">Communications Engineering (6)</a></li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#">Constructions (9)</a></li>
                            </ul>

                        </div>

                        <div class="sidebar-widget archives">
                            <div class="widget-title text-left">
                                <h4>Archives</h4>
                                <hr>
                            </div>

                            <ul class="list-unstyled list-block">
                                <li><i class="fa fa-angle-double-right"></i><a href="#">March 2015</a></li>
                                <li><i class="fa fa-angle-double-right"></i> <a href="#">February 2015</a></li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#">January 2015</a></li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#">December 2014</a></li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#">November 2014</a></li>
                            </ul>

                        </div>


                        <div class="sidebar-widget tags">
                            <div class="widget-title text-left">
                                <h4>Tags</h4>
                                <hr>
                            </div>

                            <ul class="list-inline keywords">
                                <li><a href="#">architecture</a></li>
                                <li><a href="#">civil</a></li>
                                <li><a href="#">engineering</a></li>
                                <li><a href="#">construction</a></li>
                                <li><a href="#">mechanical</a></li>
                                <li><a href="#">electrical</a></li>
                                <li><a href="#">industrial</a></li>
                                <li><a href="#">communication</a></li>
                                <li><a href="#">electronics</a></li>
                                <li><a href="#">tips</a></li>
                                <li><a href="#">management</a></li>
                            </ul>
                        </div>

                    </div>
                </div><!-- End Sidebar -->

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