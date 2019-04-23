<!doctype html>

<html lang="en">

    <head>

        <!-- Basic -->
        <title>StudentActivityPortal</title>

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
            
			.wrapper{
				padding-right: 5px;
  				padding-left: -1px; 
                font-family: "Times New Roman", Times, serif;
			}
			div#status{position:fixed; font-size:24px;
            font-family: "Times New Roman", Times, serif;}
			div#wrap{width:800px; margin:0px auto;
            font-family: "Times New Roman", Times, serif;}
			div.newData{height:1000px; background:#09F; margin:10px 0px;
            font-family: "Times New Roman", Times, serif;}
			
			
			            
        </style>
        
        <!--- Java Script --->
        <!--
        <script>
        
        	var n=0;
        	function setActive(x)
        	{
        		document.getElementsByName(x)[0].setAttribute("class","active");
        	}
        	
        	function addEvents()
        	{
        		if(n==-1) return;
        		var parts = window.location.search.substr(1).split("&");
				var $_GET = {};
				for (var i = 0; i < parts.length; i++) {
    				var temp = parts[i].split("=");
    				$_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
					}
        		var hr = new XMLHttpRequest ();
        		var url = "./phpSA/addEvents.php?type="+$_GET['type'];
        		var vars = "n="+n;
        		n=n+4;
        		hr.open("POST",url,true);
        		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        		hr.onreadystatechange = function (){
        					if(hr.readyState == 4 && hr.status == 200) {
        					var return_data = hr.responseText;
        					var wrap = document.getElementById('scrollX');
        					if(return_data.trim().substr(return_data.length - 5)  === "00000")
        					{
        						wrap.innerHTML+="<center><p><big>~~No Events Left To show~~</big></p></center>";
        						n=-1;
        						return;
        					}
        					wrap.innerHTML+=return_data;
        					}
        				}
        		hr.send(vars);
        		document.getElementById("loading").innerHTML = "Loading...";
        	}
        	
        	function yHandler(){
				var wrap = document.getElementById('scrollX');
				var contentHeight = wrap.offsetHeight;
				var yOffset = window.pageYOffset; 
				var y = yOffset + window.innerHeight;
				var sideBar = document.getElementById('SideBar');
				if(y >= contentHeight){
				// Ajax call to get more dynamic data goes here
					addEvents();
					}
				if( y >=900){
					sideBar.setAttribute("style","position:fixed;");
					sideBar.style.top="40px";
				}
				else if(y<1050)
				{
					sideBar.setAttribute("style","position:static;");
					sideBar.style.top="auto";
				}
				 
				}
			
				window.onscroll = yHandler;
			
        	
        </script>-->
        

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
                                        <li><a href="#"><i class="fa fa-phone"></i>8146650550</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> support@info.com</a>
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
                                <a class="active"  href="StudentActivity.php">Student Activities</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
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
            <div class="overlay" >
                <div class="container">
                    <div class="row" >
                        <div class="col-md-12 text-center" >
                            <h1>Student Activity Portal</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
    <div class="container" >
        <div class="row">
            <div class="sidebar col-sm-2 verticalLine" style="color: red">
	                <ul class="nav nav-sidebar" id = "SideBar">
	            <li><form action="StudentActivity.php" method="POST">
	            		<input type="text" name='Search' placeholder="Search.." style ="width: 170px;">
	            		<div class="wrapper"><button type="submit" name="search" style="text-align: center;">Search</button></div>
	            	</form>
	            </li>
                        <li name="New"><a href="StudentActivity.php?type=New">New</a></li>
                        <li name="General"><a href="StudentActivity.php?type=General">General</a></li>
                <li name="Culturals"><a href="StudentActivity.php?type=Culturals">Culturals</a></li>
                <li name="Sports"><a href="StudentActivity.php?type=Sports">Sports</a></li>
                <li name="TechClubs"><a href="StudentActivity.php?type=Tech">Technical Clubs</a></li>
                <li name="TP"><a href="StudentActivity.php?type=TP">T&P</a></li>
                </ul>
            </div>
                <div class="loading"></div>
            </div>
        </div>
    
        <script src="asset/js/jquery-2.1.3.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        
        
   
        
    
    </body>
</html>
