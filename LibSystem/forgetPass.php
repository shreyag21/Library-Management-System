<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<?php
    @ob_start();
    session_start();
            
 ?>
<html lang="en">

    <head>

        <!-- Basic -->
        <title>IIT Ropar | Library</title>

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



        <!-- Sulfur JS File -->
        <script src="asset/js/jquery-2.1.3.min.js"></script>
        <script src="asset/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="asset/js/modernizrr.js"></script>
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


    </head>

    <body>
    
        <header class="clearfix">
        
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                    
                                <div class="col-md-6">
                                    <!-- Start Contact Info -->
                                    <ul class="contact-details">
                                        <li><a href="#"><i class="fa fa-phone"></i> +91-9592213703</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> support@iitrpr.ac.in</a>
                                        </li> 
                                    </ul>
                                    <!-- End Contact Info -->
                                </div><!-- .col-md-6 -->
                                
                                <div class="col-md-6">
                                </div>
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
                        <a class="navbar-brand" href="#"><img src="img/iitrprlogo.jpg" style="max-height: 40px;max-width: 40px; margin-top: -10px;"></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="index.php#about-section">About Us</a>
                            </li>
                            <li>
                                <a class="active"  href="portfolio.php">Library Management System</a>
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
        
        <div class="container col-sm-4 col-sm-offset-4"  style="margin-top:20px">
            <h2 style="color:red" class="text-center">Forgot Password ?</h2>
            
            <form class="form-center"  style="margin-top:20px" method="post">
                <div class="form-group">
                    <label for="username" >Username:</label>
                    <input type="text" class="form-control" placeholder="Your username" id="username" required data-validation-required-message="Please enter your username." name="username">
                </div>
                <div class="form-group">
                    <label for="emailId" >Email ID:</label>
                    <input type="email" class="form-control" placeholder="Your email" id="emailID" required data-validation-required-message="Please enter your email." name="email">
                </div>
                
                <div class="form-group">
                    <label for="numBookIssued" >Number of book Issued currently:</label>
                    <input type="number" class="form-control" placeholder="No of issued Books" id="numBookIssued" required data-validation-required-message="Please enter Number of Book issued" name="numBooks">
                </div>
                <input type="submit" class="btn btn-primary" value="Submit" name= "submitForget">
                
            
            </form>
            <?php
            
                $servername = "localhost";
                $username = "root";
                $password = "";

                // Create connection
                $conn = new mysqli($servername, $username, $password);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                mysqli_select_db($conn,'library');

            
            
                if(isset($_POST['submitForget'])){
                    $sql = "Select user_info.email , user_info.person_id From user_info INNER JOIN authenticate ON authenticate.person_id = user_info.person_id Where authenticate.user_name = '".$_POST['username'] . "'";
                    $result = mysqli_query($conn, $sql);
                    if( mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                        
                        if ($row['email'] == $_POST['email']){
                            $sql2 = "SELECT Count(*) as count From user_books Where person_id = ".$row['person_id'];
                            $_SESSION['person_id2'] = $row['person_id'];
                            $result2 = mysqli_query($conn, $sql2);
                            if( mysqli_num_rows($result2) > 0){
                                $row2 = mysqli_fetch_assoc($result2);
                                if ($row2['count'] == $_POST['numBooks']){
                                    $_SESSION['username2'] = $_POST['username'];
                                    
                                    header("refresh:0;url=forgetPass2.php");
                                }
                            }
                            else{
                                echo "<script>alert('You have Entered Wrong Cedentials Please Try again')</script>";
                            }
                        }
                        else{
                            echo "<script>alert('You have Entered Wrong Cedentials Please Try again')</script>";
                        }
                    }else{
                        echo "<script>alert('You have Entered Wrong Cedentials Please Try again')</script>";
                    }
                    
                }
            ?>
            
            
        </div>
    </body>
</html>
        
