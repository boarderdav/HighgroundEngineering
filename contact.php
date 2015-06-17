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
                        <p>Send us a message and let us know how Highground Services can help you. We're always available!</p>
                        <a class="read-more" href="project-3col.php">View Our Works <span class="fa fa-chevron-circle-right"></span></a>

                    
                    </div>
                </div>

<?php /*?>                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <form action="php/sendEmailnew.php" method="post" id="contact-form" class="form" name="contactform" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <!-- Your name input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" name="first_name" id="contactName" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" name="email" id="contactEmail" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <textarea class="form-control" rows="6" placeholder="Tell Us Something..." name="contactMessage" id="contactMessage" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>

                        <div id="success"></div>
                        <button type="submit" class="btn btn-send en-btn dark">Send Message</button> <!-- Send button -->
                    </form><?php */?>



<form name="contact.php" method="post" action="sendEmailnewpaste.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">  
 
 </td>
 
</tr>
 
</table>
 
</form>

<?php /*?>                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <form action="php/sendEmailnew.php" method="post"  name="contactform" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <!-- Your name input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" name="first_name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" name="email"  required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <textarea class="form-control" rows="6" placeholder="Tell Us Something..." name="comments"  required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>

                        <div id="success"></div>
                        <button type="submit" class="btn btn-send en-btn dark">Send Message</button> <!-- Send button -->
                        <a href="http://highgroundengineering.com/contact.php">test</a>
                    </form>
<?php */?>
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
                                <h4>Franklin Office Location</h4>
                                <hr>
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d799.9357743256188!2d-76.92330880000002!3d36.680675199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b02474ac29e22d%3A0xf31cd96b0037694b!2s542+N+Mechanic+St%2C+Franklin%2C+VA+23851!5e0!3m2!1sen!2sus!4v1432838103938" width="600" height="450" frameborder="0" style="border:0"></iframe>
                                    
                                
                                </div>
                              </div>
                            </div>
					  </div>
                      
                        <div class="row">	
                          <div class="col-md-4">
                            <div class="contact-details">
                              <h4>Newport News Location</h4>
                                  <hr>
                                <ul class="list-unstyled list-block">
                                	<li><strong>Office Hours: </strong> <br>Mon-Friday 8am - 10pm</li>
                                    <li><strong>Address: </strong> <br>227 28th Street Newport News, VA 23607</li>
                                    <li><strong>Tell: </strong> <br>757-245-6321</li>
                                    <li><strong>Fax: </strong> <br>757-245-6320</li>
                                </ul>
                              </div>
                            </div>
                            
                            <div class="col-md-8">
                              <div class="contact-details">
                                <h4>Newport News Office Location</h4>
                                <hr>
                                <div class="map">    
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3187.235102333955!2d-76.4305569!3d36.980320999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ba9da1a6928fe5%3A0x1eaf7c612b6fa186!2s227+28th+St%2C+Newport+News%2C+VA+23607!5e0!3m2!1sen!2sus!4v1432838282372" width="600" height="450" frameborder="0" style="border:0"></iframe>
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
                        <h2>Our Offices and <br>Branches</h2>
                        <hr>
                        <a class="read-more" href="contact.php">Start a Project with Us Now <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-8 col-md-8">
                    <p><strong><em>Highground Services</em></strong> one of the biggest Engineering Company in the region with two major branch offices located in Virginia.  As we continue to grow, we are planning to expand more of our branches from time to time. Visit the nearest branch and get your Engineering Project done right. </p>

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