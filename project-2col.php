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

	<?php include('php/header_main_nav.php');?>
    
    <!-- Page Header
    ========================-->
    <div id="en-header">
        <div class="container">
            <h2 class="pull-left">Portfolio</h2>
            <ol class="breadcrumb pull-right">
              <li><a href="index.html">Home</a></li>
              <li class="active">Portfolio - 2 Col</li>
            </ol>
        </div>
    </div>

    <!-- Page Content
    ==================================-->
    <div id="en-content">

        <div class="container"> <!-- Container -->

            <ul class="list-inline cat">
                <li><a href="#" data-filter="*" class="active">All</a></li>
                <li><a href="#" data-filter=".construction">Construction</a></li>
                <li><a href="#" data-filter=".communication">Communications</a></li>
                <li><a href="#" data-filter=".mechanical">Mechanical</a></li>
                <li><a href="#" data-filter=".electrical">Electrical</a></li>
                <li><a href="#" data-filter=".industrial">Industrial</a></li>
                <li><a href="#" data-filter=".civil">Civil and Architecture</a></li>
                <li><a href="#" data-filter=".management">Management</a></li>
            </ul>

            <div class="clearfix"></div>
            <div class="smallspacer"></div>

        
            <div class="row">
            <div id="itemsWork">

                <div class="col-sm-6 col-md-6 col-lg-6 all civil mechanical industrial communication">
                    <div class="item"><!-- Portfolio Item #1 -->
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h4>Site Improvement Engineering</h4>
                                <br>
                                <p>Site Improvement Engineering projects are something we've worked with for over a decade.    </p>
                                <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                            <img src="http://placehold.it/800x550" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 mechanical construction civil">
                    <div class="item"> <!-- Portfolio Item #2 -->
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h4>Mechancial Engineering</h4>
                                <br>
                                <p>Mechanical Engineering projects have been some of the industries we've worked in most for a variety of clients.</p>
                                <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                            <img src="http://placehold.it/800x550" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 industrial management">
                    <div class="item"> <!-- Portfolio Item #3 -->
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h4>Industrial Services</h4>
                                <br>
                                <p>Highground provides a wide range of Industrial services for a variety of clients which serve some of the most demanding facilities in the industry.  </p>
                                <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                            <img src="http://placehold.it/800x550" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 industrial mechanical">
                    <div class="item"><!-- Portfolio Item #4 -->
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h4>System Integration</h4>
                                <br>
                                <p>Systems installation and systems integration are an area that Highground has ample exerience with. Check out our project history. </p>
                                <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                            <img src="http://placehold.it/800x550" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 electrical">
                    <div class="item"><!-- Portfolio Item #5 -->
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h4>Electrical Substation Design</h4>
                                <br>
                                <p>Electrical substations are an area we've aquired a tremendous amount of quality history with.  We've designed some of the best substation configurations on the market.  </p>
                                <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                            <img src="http://placehold.it/800x550" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 civil construction industrial">
                    <div class="item"><!-- Portfolio Item #6 -->
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h4>Control Systems</h4>
                                <br>
                                <p>Control systems are our bread and butter.  Highground has designed some of the best systems on the market for a variety of clients. </p>
                                <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                            <img src="http://placehold.it/800x550" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 civil">
                    <div class="item"> <!-- Portfolio Item #3 -->
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h4>Architectural Design</h4>
                                <br>
                                <p>Highground has partnered with a variety of architectural design firms to provide the highest quality building renovations and designs for our clients.  </p>
                                <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                            <img src="http://placehold.it/800x550" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 construction">
                    <div class="item"><!-- Portfolio Item #4 -->
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h4>Commercial Building</h4>
                                <br>
                                <p>Commercial Buildings are an area we've worked with for over a decade.  Our construction team and design group are an integral part of our success. </p>
                                <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                            <img src="http://placehold.it/800x550" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 construction mechanical">
                    <div class="item"><!-- Portfolio Item #5 -->
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h4>Construction Services</h4>
                                <br>
                                <p>Highground provides a variety of construction services for a wide range of clients in the Hampton Roads area and beyond.   </p>
                                <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                            <img src="http://placehold.it/800x550" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 communications civil construction">
                    <div class="item"><!-- Portfolio Item #6 -->
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <h4>Technical Writing</h4>
                                <br>
                                <p>Our Technical Writing staff provides the best quality services time and time again. From preventative maintenance plans, to specifications writing, we've been successful with them all.</p>
                                <a class="read-more" href="single-project.php">View Project <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                            <img src="http://placehold.it/800x550" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>

             </div> <!-- Isotope -->
            </div> <!-- End Row -->

        </div> <!-- End Container-Fluid -->
    </div> <!-- End Services Section -->


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