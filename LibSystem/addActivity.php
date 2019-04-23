<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->




<html lang="en">

    <head>

        <!-- Basic -->
        <title>IITRopar | StudentActivityPortal</title>

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
        <!--- Inline style -->
        <style>
			body {font-family: Arial, Helvetica, sans-serif;}

			input[type=text], select, textarea 
			{
    			width: 100%;
    			padding: 12px;
    			border: 1px solid #ccc;
    			border-radius: 4px;
    			box-sizing: border-box;
    			margin-top: 6px;
    			margin-bottom: 16px;
    			resize: vertical;
			}

			input[type=submit] 
			{
    			background-color: #4CAF50;
    			color: white;
    			padding: 12px 20px;
    			border: none;
    			border-radius: 4px;
    			cursor: pointer;
			}

			input[type=submit]:hover 
			{
    			background-color: #45a049;
			}

			#message
			{
    			border-radius: 5px;
    			background-color: #f2f2f2;
    			padding: 20px;
			}
			.nav-sidebar {
  				margin-right: 20px; /* 20px padding + 1px border */
 			    margin-bottom: 20px;
  				margin-left: -20px;
			}
			.nav-sidebar > li > a {
  				padding-right: 50px;
  				padding-left: 50px;
			}
			.nav-sidebar > .active > a,
			.nav-sidebar > .active > a:hover,
			.nav-sidebar > .active > a:focus {
  				color: #fff;
  				background-color: #428bca;
			}
			
            
		</style>
        
        
        
        
        <!-- Java Script -->
        
        <script type="text/javascript">
			function clicked() 
			{
    			alert('Please Check if all the fields are filled properly!\nClick OK to Submit');
			}
			
			function emptyFileds()
			{
				alert('There are Empty Fields |-_-| \nPlease Try again!');
			}
        </script>

    </head>

    <body>
    	<?php
            require_once('./phpSA/db_connect.php')
		?>
    
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
                                <a href="index.html#about-section">About Us</a>
                            </li>
                            <li>
                                <a   href="portfolio.php">Library Management System</a>
                            </li>
                            <li>
                                <a class="active" href="StudentActivity.php">Student Activities</a>
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
                            <h1>Student Activity Portal</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
<!--        <div class="overlay">-->
    <div class="container">
        <div class="row">
            <div class="sidebar col-sm-2" style="color: red" >
	                <ul class="nav nav-sidebar">
	            <li><form action="StudentActivity.php" method="POST">
	            		<input type="text" name='Search' placeholder="Search..">
	            		<div class='wrapper'><button type="submit" name="search">Search</button></div>
	            	</form>
	            </li>
                <li name="New"><a href="StudentActivity.php?type=New">New</a></li>
                <li name="General"><a href="StudentActivity.php?type=General">General</a></li>
                <li name="Culturals"><a href="StudentActivity.php?type=Culturals">Culturals</a></li>
                <li name="Sports"><a href="StudentActivity.php?type=Sports">Sports</a></li>
                <li name="TechClubs"><a href="StudentActivity.php?type=Tech">Technical Clubs</a></li>
                <li name="TP"><a href="StudentActivity.php?type=TP">T&P</a></li>
                <?php
                	echo "<li class=\"active\" ><a href=\"addActivity.php\">Add Event</a></li>";
                ?>
                </ul>
            </div>
            <div class="container col-md-10">
     			 <!-- Form for Texting-->      	
      			<form action="addActivity.php" method="post" onsubmit="return confirm('Please Check if all the fields are filled properly!');">
	 				<label for="title">Title</label>
    				<input type="text" id="title" name="title" placeholder="Title..">
    				<label for="category">Category</label>
    				<select id="category" name="category">
	      				<option value="General">General</option>
	      				<option value="Sports">Sports</option>
	      				<option value="Culturals">Culturals</option>
	      				<option value="Technical Clubs">Technical Clubs</option>
	      				<option value="T&P">T&P</option>
    				</select>
   		  			<label for="subject">Subject</label>
    				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    				<input type="submit" value="submit" name="submit">
  	  			</form>
            </div>
            <?php
  				 if (isset($_POST['submit'])) 
  				 {  
  				 	$title = $_POST['title'];
  				 	$cat = $_POST['category'];
  				 	$desc = $_POST['subject'];
  				 	if(empty($title) || empty($cat) || empty($desc))
					{
    					echo "<script>emptyFileds()</script>";
					}
					else
					{
						//Insert into event 					
						$stmt=$conn->prepare("INSERT INTO event(title,description,time) values(?,?,NOW())");
						$stmt->bind_param('ss',$title,$desc);
						$stmt->execute();
						//get eventId
						$event_id = $conn->insert_id;
						//get cat_id
						$stmt=$conn->prepare("Select cat_id from category where cat = ?");
						$stmt->bind_param('s',$cat);
						$stmt->execute();
						$stmt->bind_result($cat_id);
						$stmt->fetch();
						//Insert eventId and catId into refernces
						$stmt->prepare("Insert into reference(event_id,cat_id) value(?,?)");
						$stmt->bind_param('ss',$event_id,$cat_id);
						$stmt->execute();
						echo "<script type=\"text/javascript\">location.href = 'StudentActivity.php?type=New';</script>";
					}
   				}
  			?>
        	</div>
    </div>
<!--        </div>-->
        <script src="asset/js/jquery-2.1.3.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        
        
   
        
    
    </body>
</html>
