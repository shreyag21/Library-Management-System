<!doctype html>
<?php
    @ob_start();
    session_start();
            
?>
<html lang="en">

    <head>

        <!-- Basic -->
        <title>Web Portal | Home</title>

        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Page Description and Author -->
        <meta name="description" content="Sulfur - Responsive HTML5 Template">
        <meta name="author" content="Shahriyar Ahmed">

        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css" type="text/css">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="asset/css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="asset/css/owl.theme.css" type="text/css">
        <link rel="stylesheet" href="asset/css/owl.transitions.css" type="text/css">
        
        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/animate.css">
        
        <!-- Lightbox CSS -->
        <link rel="stylesheet" type="text/css" href="asset/css/lightbox.css">

        <!-- Sulfur CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">

        <!-- Responsive CSS Style -->
        <link rel="stylesheet" type="text/css" href="asset/css/responsive.css">


        <script src="asset/js/modernizrr.js"></script>


    </head>

    <body>
    
        <header class="clearfix">
        
            <!-- Start Top Bar -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                    
                                <div class="col-md-6">
                                    <!-- Start Contact Info -->
                                    <ul class="contact-details">
                                        <li><a href="#"><i class="fa fa-phone"></i> +91-8146650550</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> support@infor.com</a>
                                        </li> 
                                    </ul>
                                    <!-- End Contact Info -->
                                </div><!-- .col-md-6 -->
                                
                                <div class="col-md-6">
                                </div><!-- .col-md-6 -->
                            </div>
                                
                                
                        </div>
                    </div>                        

                </div><!-- .row -->
            </div><!-- .container -->
            <!-- End Top Bar -->
        
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="index.html"></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="#about-section">About Us</a>
                            </li>
                            <li>
                                <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";

                                    // Create connection
                                    $co = new mysqli($servername, $username, $password);

                                    // Check connection
                                    if ($co->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    mysqli_select_db($co,'library');
                                    if (isset($_SESSION['userID1']) && !empty($_SESSION['userID1'])){
                                         $sql1 = "SELECT is_admin FRom user_info Where person_id = ".$_SESSION['person_id'];
                                        $result1 = mysqli_query($co, $sql1);
                                        if (mysqli_num_rows($result1)){
                                            $row = mysqli_fetch_assoc($result1);
                                            if ($row['is_admin'] == 1){
                                                echo "<a href='adminLib.php'>Library Management System</a>";
                                            }else{
                                                echo "<a href='userLib.php'>Library Management System</a>";
                                            }
                                        }
                                    }else{
                                        echo "<a href='portfolio.php'>Library Management System</a>";
                                    }
                                ?>
                            </li>
                            <li>
                                <a href="StudentActivity.php">Student Activities</a>
                            </li>
                            <li>
                                <a href="blogpage.html">Blog</a>
<!--
                                <ul class="dropdown">
                                    <li>
                                        <a href="blog-item.html">Item Page</a>
                                    </li>
                                </ul>
-->
                            </li>
                            <li><a href="contact.html">Contact</a>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
            <!-- End Header Logo & Naviagtion -->
            
        </header>
        
        
        <!-- Start Header Section -->
        <div class="banner">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Welcome To <span>Library</span></h1>
                        <p>In the land of Books</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
        
        
        <!-- Start About Us Section -->
    <section id="about-section" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>About Us</h2>
                        <h3>This portal provides a library management system for any collge or school. Essential features include search by ISBN, Author, Title, booking, unbooking etc.
                        The work is still in progress.</h3>
                    </div>                        
                </div>
            </div>

        </div>  
    </section>
        
        
        
        <!-- Start Team Member Section -->
    <section id="team-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>Our Team</h2>
                    </div>                        
                </div>
            </div>
            <div class="row">
                <div class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                    <div class="team-member">
                        <img src="img/shreya.jpg" class="img-responsive" alt="Rishabh Singh">
                        <div class="team-details">
                            <h4>Shreya Goyal</h4>
                            <p>Email: contact@support.com</p>
                            <ul>
                                <li><a href="https://www.facebook.com/shreya.goyal.21" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Member Section -->
        
        
        
        
        <!-- Start Footer Section -->
        <section id="footer-section" class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Address</span>
                            </h3>
                        </div>
                        
                        <div class="footer-address">
                            <ul>
                                <li class="footer-contact"><i class="fa fa-home"></i>NIT Jalandhar</li>
                                <li class="footer-contact"><i class="fa fa-envelope"></i><a href="#">support@info.com</a></li>
                                <li class="footer-contact"><i class="fa fa-phone"></i>+91-8146650550</li>
                                <li class="footer-contact"><i class="fa fa-globe"></i>
                                </li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3 -->
                    
                    
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Latest Tweet</span>
                            </h3>
                        </div>
                        
                        <div class="latest-tweet">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-twitter fa-2x media-object"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">About 15 days ago</h4>
                                    <p>xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz</p>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-3 -->
                    
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Stay With us</span>
                            </h3>
                        </div>
                        <div class="subscription">
                            <p>Some Text Some Text Some Text Some Text Some Text Some Text Some Text</p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your E-mail" id="name" required data-validation-required-message="Please enter your name.">
                                <input type="submit" class="btn btn-primary" value="Subscribe">
                            </div>
                        </div>
                    </div>
                </div><!--/.row -->
            </div><!-- /.container -->
        </section>
        <!-- End Footer Section -->
        
        
        <!-- Start CCopyright Section -->
        <div id="copyright-section" class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="copyright">
                            Copyright © 2014. All Rights Reserved.Design and Developed by <a href="http://www.themefisher.com">Themefisher</a>
                        </div>
                    </div>
                    
                </div><!--/.row -->
            </div><!-- /.container -->
        </div>
        <!-- End CCopyright Section -->
        
        
        
       <!-- Sulfur JS File -->
        <script src="asset/js/jquery-2.1.3.min.js"></script>
        <script src="asset/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="asset/js/owl.carousel.min.js"></script>
        <script src="asset/js/jquery.appear.js"></script>
        <script src="asset/js/jquery.fitvids.js"></script>
        <script src="asset/js/jquery.nicescroll.min.js"></script>
        <script src="asset/js/lightbox.min.js"></script>
        <script src="asset/js/count-to.js"></script>
        <script src="asset/js/styleswitcher.js"></script>
        
        <script src="asset/js/map.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="asset/js/script.js"></script> 
        
    
    </body>
</html>