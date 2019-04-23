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
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?php

                                echo "<h1>Hi, " . $_SESSION['userID1'] ."</h1>";
                                $_SESSION["first_name"]=$_SESSION["first_name"];
                                $_SESSION["last_name"]=$_SESSION["last_name"];
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
                          <a class="navbar-brand" href="userProfile.php" style="font-size:20px">
                              User-Profile
                          </a>
                          <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          </button>
                      </div>
                      <div class="navbar-collapse collapse" id="navbarCollapse">
                          
                          <form class="navbar-form navbar-right" method="post">
                               <button  type="submit" name="logoutbtn" class="btn btn-default">Logout</button>
                          </form>
                          <form class="navbar-form navbar-right" method="post">
                               <label for="searchBY">Search BY:</label>
                                <select class="dropdown-new" id = "searchBy" style="margin-left:5px"name="selectOp[]">
                                    <option>ISBN</option>
                                    <option>Author</option>
                                    <option>Title</option>
                                </select>
                                <div class="form-group">
                                    <input type="text" id="searchBookstext" placeholder="Search Books" class="form-control" style="border-color: #ccc; margin-left:5px;" name="searchBookstext">
                                </div>
                                <button  type="submit" name="searchBooks" class="btn btn-default">Search</button>
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
                                    
                                    if(isset($_POST['searchBooks'])){
                                        
                                        foreach ($_POST['selectOp'] as $select)
                                        {
                                            if (isset($_POST['searchBookstext'])){
                                                $_POST['searchBookstext'] = trim($_POST['searchBookstext']);
//                                                echo "You have selected :" .$select . "<br>" ;
                                                if (strcmp($select,"ISBN") == 0 ){
                                                    $sql = "SELECT * FROM book_info WHERE ISBN = '". $_POST['searchBookstext'] . "'";
//                                                    echo $sql . "<br>";
                                                    $result = mysqli_query($conn, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while($row = mysqli_fetch_assoc($result)){
//                                                            echo "Book name: " . $row['book_name'] . " is_sem: " . $row['is_sem'] . "<br>";
                                                            $authorName= "";
                                                            $bookname = $row['book_name'];
                                                            $book_id = $row['book_id'];
//                                                            echo "fefa ff ".$book_id;
                                                            $authorsql = "SELECT author_name FROM author INNER JOIN book_author ON book_author.author_id = author.author_id INNER JOIN book_info ON book_info.book_id = book_author.book_id WHERE book_info.ISBN = '". $_POST['searchBookstext'] . "'";
                                                            $authroResult = mysqli_query($conn, $authorsql);
                                                            $count = mysqli_num_rows($authroResult);
                                                            $i = 0;
                                                                while($row = mysqli_fetch_assoc($authroResult)){
                                                                    if ($i == ($count -1 ) ){
                                                                        $authorName = $authorName . $row['author_name'];
                                                                    }else{
                                                                        $authorName = $authorName . $row['author_name'].", ";
                                                                    }
                                                                    $i = $i + 1;
                                                                    
                                                                }
                                                            
                                                            echo '<section id="portfolio" class="portfolio-section-1">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-12">

                                                                            <!-- Start Portfolio items -->
                                                                            <ul id="portfolio-list">
                                                                                <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                                                                    <div class="portfolio-item">
                                                                                        <img src="img/book.png" class="img-responsive" style="opacity:0.8" alt="" />
                                                                                        <div class="portfolio-caption">
                                                                                        
                                                                                            <h4>'. $bookname .'</h4>
                                                                                            <p>Author: ' .$authorName . '</p>
                                                                                            <a data-toggle="modal" title="Add to Cart" class="link-1"><i class="fa fa-magic" onclick="fun1('.$book_id .','.$_SESSION["person_id"]. ')"></i></a>
                                                                                            <a class="link-2" title = "Issue Book"><i class="fa fa-link"  onclick="fun2('.$book_id .','.$_SESSION["person_id"]. ')"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                </ul>
                                                                                <!-- End Portfolio items -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>';
                                                            
                                                        }
                                                    }else {
                                                        echo "No Result found<br>";
                                                    }
                                                } 
                                                else if (strcmp($select,"Author") == 0 ){
                                                    $sql = "SELECT * FROM book_info WHERE book_id IN (SELECT book_id FROM book_author WHERE author_id IN ( SELECT author_id FROM author WHERE author_name like '%" . $_POST['searchBookstext'] . "%') )";
//                                                    echo $sql . "<br>";
                                                    
                                                    $result = mysqli_query($conn, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        echo '<section id="portfolio" class="portfolio-section-1">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-12">

                                                                            <!-- Start Portfolio items -->
                                                                            <ul id="portfolio-list">';
                                                        while($row = mysqli_fetch_assoc($result)){
//                                                            echo "Book name: " . $row['book_name'] . " is_sem: " . $row['is_sem'] . "<br>";
                                                            $authorName= "";
                                                            $bookname = $row['book_name'];
                                                            $book_id = $row['book_id'];
                                                            $authorsql = "SELECT author_name FROM author INNER JOIN book_author ON book_author.author_id = author.author_id INNER JOIN book_info ON book_info.book_id = book_author.book_id WHERE book_info.book_id = ". $row['book_id'];
                                                            $authroResult = mysqli_query($conn, $authorsql);
                                                            $count = mysqli_num_rows($authroResult);
                                                            $i = 0;
                                                            while($row1 = mysqli_fetch_assoc($authroResult)){
                                                                if ($i == ($count -1 ) ){
                                                                    $authorName = $authorName . $row1['author_name'];
                                                                }else{
                                                                    $authorName = $authorName . $row1['author_name'].", ";
                                                                }
                                                                $i = $i + 1;

                                                            }
                                                            
                                                            echo '<li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                                                <div class="portfolio-item">
                                                                    <img src="img/book.png" class="img-responsive" style="opacity:0.8" alt="" />
                                                                    <div class="portfolio-caption">
                                                                        <h4>'. $bookname .'</h4>
                                                                        <p>Author: ' .$authorName . '</p>
                                                                        <a data-toggle="modal" title="Add to Cart" onclick="fun1('.$book_id .','.$_SESSION["person_id"]. ')" class="link-1"><i class="fa fa-magic"></i></a>
                                                                        <a class="link-2"><i class="fa fa-link" title = "Issue Book" onclick="fun2('.$book_id .','.$_SESSION["person_id"]. ')"></i></a>                                                                    </div>
                                                                </div>
                                                            </li>';
                                                                                

                                                        }
                                                        echo '              </ul>
                                                                        <!-- End Portfolio items -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>';
                                                    }else {
                                                        echo "No Result found<br>";
                                                    }
                                                } 
                                                else if (strcmp($select,"Title") == 0 ){
                                                    
                                                    $sql = "SELECT * FROM book_info WHERE book_name  like '%" . $_POST['searchBookstext'] ."%'";
//                                                    echo $sql . "<br>";
                                                    $result = mysqli_query($conn, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        echo '<section id="portfolio" class="portfolio-section-1">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-12">

                                                                            <!-- Start Portfolio items -->
                                                                            <ul id="portfolio-list">';
                                                        while($row = mysqli_fetch_assoc($result)){
//                                                            echo "Book name: " . $row['book_name'] . " is_sem: " . $row['is_sem'] . "<br>";
                                                            
                                                            $bookname = $row['book_name'];
                                                            $book_id = $row['book_id'];
                                                            $authorName= "";
                                                            $authorsql = "SELECT author_name FROM author INNER JOIN book_author ON book_author.author_id = author.author_id INNER JOIN book_info ON book_info.book_id = book_author.book_id WHERE book_info.book_id = ". $row['book_id'];
                                                            $authroResult = mysqli_query($conn, $authorsql);
                                                            $count = mysqli_num_rows($authroResult);
                                                            $i = 0;
                                                            while($row1 = mysqli_fetch_assoc($authroResult)){
                                                                if ($i == ($count -1 ) ){
                                                                    $authorName = $authorName . $row1['author_name'];
                                                                }else{
                                                                    $authorName = $authorName . $row1['author_name'].", ";
                                                                }
                                                                $i = $i + 1;

                                                            }
                                                            
                                                            echo '<li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                                                <div class="portfolio-item">
                                                                    <img src="img/book.png" class="img-responsive" style="opacity:0.8" alt="" />
                                                                    <div class="portfolio-caption">
                                                                        <h4>'. $bookname .'</h4>
                                                                        <p>Author: ' .$authorName . '</p>
                                                                        <a  data-toggle="modal" title="Add to Cart" onclick="fun1('.$book_id .','.$_SESSION["person_id"]. ')" class="link-1"><i class="fa fa-magic"></i></a>
                                                                        <a class="link-2"  onclick="fun2('.$book_id .','.$_SESSION["person_id"]. ')"><i class="fa fa-link" title = "Issue Book"></i></a>                                       </div>
                                                                </div>
                                                            </li>';
                                                                                

                                                        }
                                                        echo '              </ul>
                                                                        <!-- End Portfolio items -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>';
                                                    }else {
                                                        echo "No Result found<br>";
                                                    }
                                                }
                                            }
                                        }
                                    }
                          
                                    if (isset($_POST["logoutbtn"])){
                                        var_dump(isset($_POST["logoutbtn"]));   
                                        session_unset();
                                        session_destroy();
                                        header('Location: portfolio.php');
                                    }
                          
                          
                          
                          
                                        
                               ?>
                          <script>
                                function fun1(book_id,person_id){
                                    var x = window.confirm("Are u sure to add this book to cart");
                                    if (x){
                                        $.ajax({
                                            url:'addCart.php?book_id='+book_id+'&person_id=' + person_id,
                                            success:function (result){
                                                result = result.trim();
                                                if (result == "1"){
                                                    window.alert('Your book has been added to cart!!');    
                                                }
                                                else if(result == "2"){
                                                    window.alert('Sorry there was some problem and your book Cannot be added To cart' ) ;
                                                }else if(result == "3"){
                                                    window.alert('This Book Is already present in your cart');
                                                }else{
                                                    window.alert('Sorry there was some problem and your book Cannot be added To cart');
                                                }
                                                
                                            }                                        
                                            
                                        })
                                    }
                                }
                          </script>
                              
                          <script>
                              function fun2(book_id,person_id){
                                    var x = window.confirm("Are You sure to Issue this book");
                                    if (x){
                                        $.ajax({
                                            url:'issueBook.php?book_id='+book_id+'&person_id=' + person_id,
                                            success:function (result){
                                                result = result.trim();

                                                console.log(result);
                                                if (result == "1"){
                                                    window.alert('Your book has been issued!!');    
                                                }
                                                else if(result == "2"){
                                                    window.alert('Sorry there was some problem and your book Cannot be issued dddddddddssssssssssss') ;
                                                }else if (result=="3"){
                                                    window.alert('Sorry There are no books left to issue. You can read this book as reference in library');
                                                }
                                                else if (result == "4"){
                                                    window.alert('You have alrady Booked 4 Books Cannot issue more books.');
                                                }else{
                                                    window.alert('Sorry there was some problem and your book Cannot be Issued ddddddddd ' +result);
                                                }
                                                
                                            }                                        
                                            
                                        })
                                    }
                                }
                          </script>
                      </div>
                  </div>
              </nav>
            </div>
        </div>
        
        
           
        <div class="text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms" style="margin-top:10px">
            <h1>Issued Books</h1>
        </div>                  
        
        <!-- Start Portfolio Section -->
        <section id="portfolio" class="portfolio-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="portfolio-list">
                        <?php
                            $sql = "SELECT user_books.fine, user_books.book_id, user_books.date_return, user_books.due_date, book_info.book_name FROM user_books INNER JOIN book_info ON book_info.book_id = user_books.book_id WHERE person_id = ". $_SESSION['person_id'];
                            $result = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($result);
                            $j = 0;
                            if ($count > 0){
                                
                                while($row = mysqli_fetch_assoc($result)){
                                    $currDate = date('Y-m-d');
                                    if ($row['date_return'] == NULL ){
                                        
                                        $authorName= "";
                                        $authorsql = "SELECT author_name FROM author INNER JOIN book_author ON book_author.author_id = author.author_id INNER JOIN book_info ON book_info.book_id = book_author.book_id WHERE book_info.book_id = ". $row['book_id'];
                                        $authroResult = mysqli_query($conn, $authorsql);
                                        $count = mysqli_num_rows($authroResult);
                                        $i = 0;
                                        while($row1 = mysqli_fetch_assoc($authroResult)){
                                            if ($i == ($count -1 ) ){
                                                $authorName = $authorName . $row1['author_name'];
                                            }else{
                                                $authorName = $authorName . $row1['author_name'].", ";
                                            }
                                            $i = $i +1;
                                        }
                                            
                                            echo '
                                                <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                                    <div class="portfolio-item">
                                                        <img src="img/book.png" class="img-responsive" style="opacity:0.8" alt="" />
                                                        <div class="portfolio-caption">
                                                            <h4>'. $row["book_name"] .'</h4>
                                                            <p>Author: '. $authorName .'</p>
                                                        </div>
                                                    </div>
                                                </li>';
                                    }

                                }


                            }else if ($j == 0) {
                                echo '<p class="text-center" style="color:red;font-size:20px">You have currently no book issued</p>';
                            }
                            else{
                                 echo '<p>You have currently no book issued</p>';
                            }
                        ?>
                        </ul>
                        <!-- Start Portfolio items -->
            
                        <!-- End Portfolio items -->
                    </div>
                </div>
            </div>
        </section>
        
        
        
        
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

<!--
<ul id="portfolio-list">
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                <div class="portfolio-item">
                                    <img src="img/book.png" class="img-responsive" style="opacity:0.8" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Book Title</h4>
                                        <p>Description and authors</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            
                            
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="portfolio-item">
                                    <img src="img/book.png" class="img-responsive" alt="" style="opacity:0.8" />
                                    <div class="portfolio-caption">
                                        <h4>Book Title</h4>
                                        <p>Description and authors</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">
                                <div class="portfolio-item">
                                    <img src="img/book.png" class="img-responsive" alt="" style="opacity:0.8" />
                                    <div class="portfolio-caption">
                                        <h4>Book Title</h4>
                                        <p>Description and authors</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">
                                <div class="portfolio-item">
                                    <img src="img/book.png" class="img-responsive" alt="" style="opacity:0.8" />
                                    <div class="portfolio-caption">
                                        <h4>Book Title</h4>
                                        <p>Description and authors</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1500ms">
                                <div class="portfolio-item">
                                    <img src="img/book.png" class="img-responsive" alt="" style="opacity:0.8" />
                                    <div class="portfolio-caption">
                                        <h4>Book Title</h4>
                                        <p>Description and authors</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1800ms">
                                <div class="portfolio-item">
                                    <img src="img/book.png" class="img-responsive" alt="" style="opacity:0.8" />
                                    <div class="portfolio-caption">
                                        <h4>Book Title</h4>
                                        <p>Description and authors</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            
                            
                        </ul>-->
