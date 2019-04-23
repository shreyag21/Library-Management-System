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
                                <a class="active"  href="userLib.php">Library Management System</a>
                            </li>
                            <li>
                                <a href="StudentActivity.php">Student Activities</a>
                            </li>
                            <li>
                                <a href="blogpage.html">Blog</a>
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
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?php

                                echo "<h1>Hi, " . $_SESSION['userID1'] . "</h1>";
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay">
            <div class="container" style="10px 180px">
                <nav role="navigation" class="navbar navbar-inverse">
                  <div class="container-fluid">
                      <div class="navbar-header">
                          <a class="navbar-brand" href="userLib.php" style="font-size:20px">
                              Go Back
                          </a>
                          <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          </button>
                      </div>
                      <div class="navbar-collapse collapse" id="navbarCollapse">
                          
                          <form class="navbar-form navbar-right" method="post">
                              <button  type="submit" name="cartBtn" class="btn btn-default">Your Cart</button>
                               <button  type="submit" name="historyOfIssueBookbtn" class="btn btn-default">History</button>
                              <button  type="submit" name="logoutbtn" class="btn btn-default">Logout</button>
                              
                          </form>
                      </div>
                  </div>
              </nav>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="img">
                        <?php
                            if (isset($_POST["logoutbtn"])){
                                var_dump(isset($_POST["logoutbtn"]));
                                session_unset();
                                session_destroy();
                                header('Location: portfolio.php');
                            }
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
                        
                        
                            $sql = "SELECT email FROM user_info WHERE person_id = ". $_SESSION['person_id'];
                            $result = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($result);  
                            $email = "";
                            if ($count > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    $email = $row['email'];
                                }
                            }
                                    
                            $filename1 = './uploads/'. $_SESSION['userID1']. ".jpg";
                            $filename2 = './uploads/'. $_SESSION['userID1']. ".jpeg";
                            $filename3 = './uploads/'. $_SESSION['userID1']. ".png";
                            $filename4 = './uploads/'. $_SESSION['userID1']. ".gif";

                            if (file_exists($filename1)) {
                                echo '<img alt="Profile photo" class="img-responsive" src= "' . $filename1.  '"style="padding: 10% 20%;   max-width: 100%;max-height: auto; border-radius : 100%" >';
                            }else if (file_exists($filename2) ) {
                                echo '<img alt="Profile photo" class="img-responsive" src= ' . $filename2.  'style="padding: 10% 20%;   max-width: 100%;max-height: auto; border-radius : 100%" >';
                            } 
                            else if (file_exists($filename3)) {
                                    echo '<img alt="Profile photo" class="img-responsive" src= ' . $filename3.  'style="padding: 10% 20%;   max-width: 100%;max-height: auto; border-radius : 100%" >';
                            } 
                            else if (file_exists($filename4)) {
                                    echo '<img alt="Profile photo" class="img-responsive" src= ' . $filename4.  'style="padding: 10% 20%;   max-width: 100%;max-height: auto; border-radius : 100%" >';
                            } 

                            else {
                                    echo '<form action="upload.php" method="post" enctype="multipart/form-data">
                                        <p class="text-center">Select image to upload:</p>
                                        <div class = "form-group" style="margin-left: 30%">
                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                        </div>
                                        <div class = "form-group" style="margin-left: 30%">
                                            <input type="submit" value="Upload Image" name="submit1">
                                        </div>
                                    </form>';
                            }
                        ?>
                        
                    </div>
                    <div class="about-text" style="text-align: center; margin-top:0px">
                        <?php

                            echo "<h3>". $_SESSION['userID1'] . "</h3>";
                            echo "<h4 style='margin-top:5px'>". $_SESSION['first_name'] . " " . $_SESSION['last_name'] .  "</h4>";
                            echo "<p style='margin-top:5px'>". $email . "</p>";
                        ?>
                    </div>
                </div>
                
                
                
                <div class="col-xs-8" style="margin-top: 20px">
                    
                    <?php
                        
                        if(isset($_POST['historyOfIssueBookbtn'])){
                            echo '<h3 class="text-center">History Of Issued Books</h3>';
                            $historySql = "SELECT user_books.fine , user_books.date_return, user_books.due_date, book_info.book_name from user_books INNER JOIN book_info ON book_info.book_id = user_books.book_id WHERE person_id = ". $_SESSION['person_id'];
                            $historyResult = mysqli_query($conn, $historySql);
                            $count = mysqli_num_rows($historyResult);
                            $j = 0;
                            if ($count > 0){
                                echo '<div class = "row">';
                                $i = 0;

                                while($row = mysqli_fetch_assoc($historyResult)){
                                    $currDate = date('Y-m-d');
                                        echo '<div class="col-md-6" style="margin-top: 20px"><div class="thumbnail" >
                                          <img>
                                          <h3 style="margin-left: 5px">'.$row['book_name'] .'</h3>
                                          <p style="margin-top: 10px;margin-left: 5px">Fine: ' . $row['fine'].'</p>';
                                        if ($row['date_return'] != NULL){
                                            echo '<p style="margin-left: 5px" >Return Date: ' . $row["date_return"]. '</p>';
                                        }else{
                                            echo '<p style="margin-left: 5px" >Return Date: Not Returned</p>';
                                        }
                                        echo '</div></div>';
                                        $j = 1;
                                    $i = $i + 1;
                                }
                                echo '</div>';

                            }else if ($j == 0) {
                                echo '<div class="col-md-12" style="margin-top: 20px" >
                                    <div class="thumbnail text-center">
                                        <h4 style = "color:grey">You have nor issued any books</h4>
                                    </div>
                                </div>';
                            }
                            else{
                                 echo '<div class="col-md-12" style="margin-top: 20px" >
                                    <div class="thumbnail text-center">

                                        <h4 style = "color:grey">You havent issued any books</h4>
                                    </div>
                                </div>';
                            }
                        }
                    
                        if(isset($_POST['cartBtn'])){
                            echo '<h3 class="text-center">Your Cart</h3>';
                            $cartSql = "SELECT book_info.book_id, book_info.book_name, cart_books.date_added from cart_books INNER JOIN book_info ON book_info.book_id = cart_books.book_id WHERE person_id = ". $_SESSION['person_id'];
                            $cartResult = mysqli_query($conn, $cartSql);
                            $count = mysqli_num_rows($cartResult);
                            $j = 0;
                            if ($count > 0){
                                echo '<div class = "row">';
                                $i = 0;

                                while($row = mysqli_fetch_assoc($cartResult)){
                                        echo '<div class="col-md-6" style="margin-top: 20px"><div class="thumbnail" >
                                          <img>
                                          <h3 style="margin-left: 5px">'.$row['book_name'] .'</h3>
                                          <p style="margin-top: 10px;margin-left: 5px">Fine: ' . $row['date_added'].'</p>
                                          <a style="margin-left: 5px" type="submit" href="userProfile.php?removeBookId='.$row['book_id']. '" class="btn btn-default">Remove</a>';
//                                        echo $row['book_id'];
                                        echo '</div></div>';
                                        $j = 1;
                                    $i = $i + 1;
                                }
                                
                                echo '</div>';

                            }else if ($j == 0) {
                                echo '<div class="col-md-12" style="margin-top: 20px" >
                                    <div class="thumbnail text-center">
                                        <h4 style = "color:grey">You have no book in cartcart</h4>
                                    </div>
                                </div>';
                            }
                            else{
                                 echo '<div class="col-md-12" style="margin-top: 20px" >
                                    <div class="thumbnail text-center">

                                        <h4 style = "color:grey">You have no book in cart</h4>
                                    </div>
                                </div>';
                            }
                        }
                    
                    if (isset($_GET['removeBookId'])){
                        $removeSql = "DELETE FROM cart_books WHERE person_id=" . $_SESSION['person_id']. " and book_id =  " .$_GET['removeBookId'];
                        $removeSqlResult =  mysqli_query($conn, $removeSql);
                        if ($removeSqlResult){
                            echo "<script>alert('Your book has been removed from cart')</script>";
                        }else{
                            echo "<script>alert('Sorry cannot able to remove Book due to some problem. Try again after Sometime')</script>";
                        }header("refresh:0;url=userProfile.php");
                    }
                    
                    
                        echo '<h3 class="text-center">Issued Books</h3>';
                    
                        $sql = "SELECT user_books.fine , user_books.date_return, user_books.due_date, book_info.book_name FROM user_books INNER JOIN book_info ON book_info.book_id = user_books.book_id WHERE person_id = ". $_SESSION['person_id'];
                        $result = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($result);
                        $total_fine = 0;
                        $j = 0;
                        if ($count > 0){
                            echo '<div class = "row">';
                            $i = 0;
                            
                            while($i < ($count) and $row = mysqli_fetch_assoc($result)){
                                $currDate = date('Y-m-d');
                                if ($row['date_return'] == NULL ){
                                    echo '<div class="col-md-6" style="margin-top: 20px"><div class="thumbnail" >
                                      <img>
                                      <h3 style="margin-left: 5px">'.$row['book_name'] .'</h3>
                                      <p style="margin-top: 10px;margin-left: 5px">Fine: ' . $row['fine'].'<br>
                                      Days Left: ' . $row['due_date'].'</p>
                                    </div></div>';
                                    $j = 1;
                                    
                                }
                                
                                $total_fine = $total_fine + $row['fine'];
                                $i = $i + 1;
                            }
                            echo '</div>';
                                
                        }else if ($j == 0) {
                            echo '<div class="col-md-12" style="margin-top: 20px" >
                                <div class="thumbnail text-center">
                                    <h4 style = "color:grey">You have currently no book issued</h4>
                                </div>
                            </div>';
                        }
                        else{
                             echo '<div class="col-md-12" style="margin-top: 20px" >
                                <div class="thumbnail text-center">
                                    
                                    <h4 style = "color:grey">You havent issued any books</h4>
                                </div>
                            </div>';
                        }
                        echo '<div class="col-md-12 text-center" style="margin-top: 20px" ><h4><span style="color:red;font-weight:bold" >Total Fine</span> : ' . $total_fine. '</h4></div>'
                        
                    ?>
                    
                
                
                </div>
            </div>
        </div>
                         
        
        <div class="container" style="height:100px"></div>
        
        
        
        
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
                                <li class="footer-contact"><i class="fa fa-home"></i>IIT Roapr Nangal Road, Punjab</li>
                                <li class="footer-contact"><i class="fa fa-envelope"></i><a href="#">support@iitrpr.ac.in</a></li>
                                <li class="footer-contact"><i class="fa fa-phone"></i>+91-9592213703</li>
                                <li class="footer-contact"><i class="fa fa-globe"></i><a href="http://www.iitrpr.ac.in/" target="_blank">http://www.iitrpr.ac.in/</a></li>
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
                    
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Images</span>
                            </h3>
                        </div>
                        
                        <div class="flickr-widget">
                            <ul class="flickr-list">
                                <li>
                                    <a href="img/iitrprlogo.jpg" data-lightbox="picture-1">
                                        <img src="img/iitrprlogo.jpg" alt="logo" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="img/iitrpr.jpg" data-lightbox="picture-2">
                                        <img src="img/iitrpr.jpg" alt="IITrpr" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="img/rishabh.jpg" data-lightbox="picture-3">
                                        <img src="img/rishabh.jpg" alt="Rishabh" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="img/sunny.jpg" data-lightbox="picture-4">
                                        <img src="img/sunny.jpg" alt="Nithish" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="img/jagadeesh.jpg" data-lightbox="picture-5">
                                        <img src="img/jagadeesh.jpg" alt="" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="img/vineel.jpg" data-lightbox="picture-6">
                                        <img src="img/vineel.jpg" alt="" class="img-responsive">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3 -->
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
        
        
        
        
    
    </body>
</html>