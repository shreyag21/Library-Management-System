<?php
    @ob_start();
	session_start();
?>
<?php
	$person_id = $_SESSION['person_id'];

	$servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }

    mysqli_select_db($conn,'library'); 

    $sql = "SELECT * from user_info where person_id = ".$person_id;
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){
    	if($row['is_admin']==0){
    		header("Refresh:0; url=index1.php");
    		session_destroy();
			echo "<script>alert('Access denied not an admin :\)');</script>";
    	}

    }
?>
<html>
	<head>
        <style>
            .btn-default {
                color: #f9f9f9;
                background-color: #ff432e;
                border-color: #ccc;
            }
            .btn-default:hover{
                color: #ff432e;
                background-color: #f9f9f9;
                border-color: #ff432e;
            }
        </style>

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

        <style>
        .selcls { 
            padding: 9px; 
            border: solid 1px #517B97; 
            outline: 0; 
            background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #CAD9E3), to(#FFFFFF)); 
            background: -moz-linear-gradient(top, #FFFFFF, #CAD9E3 1px, #FFFFFF 25px); 
            box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
            -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
            -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 

            } 
           .form-control {
                border-radius: 0;
                border: 2px solid #cfbebe;
            }
            .btn-default {
                color: #f9f9f9;
                background-color: #ff432e;
                border-color: #ccc;
            }
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

        /* Modal Content */
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
            }
        </style> 
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
            <div class="navbar navbar-default navbar-top" >
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

        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Search for users</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding:10px 30% 5%">
    		<form class="navbar-form navbar-center" method = "post">
    			<select name="taskOption1" class="form-control">
                     <option value="default" selected>--Search By--</option>
                     <option value="username">Username</option>
                     <option value="first_name">Name</option>
                     <option value="entry_number">Entry Number</option>
                  </select>
    			  <input name="searchusers" type="text" id="searchusers" placeholder="Search users" class="form-control" style="border-color: #ccc;" required>
    			  <input type="submit" name ="searchuserBtn"  id="searchuserBtn" class="btn btn-default" value="Search" style="border-color: #ccc; margin-right: 15px;">
    				  	
    		</form>
            
        </div>

         <div class="modal" id="tableModal1">
            <div class="modal-content" id="tableModal"></div>
        </div>
        


		<?php
            //echo "Before all the isset<br\>";
            $result = null;
			if(isset($_POST['searchuserBtn'])){
               // echo "button has been pressed <br\>";
				if(isset($_POST['taskOption1'])){
                    //echo "username is active<br\>";
                    if($_POST['taskOption1']=="username"){
    					if(isset($_POST['searchusers'])){
    						$sql = "SELECT * from user_info inner join authenticate on user_info.person_id = authenticate.person_id where user_name like '%".$_POST['searchusers']."%'";
                            //echo $sql;
    						$result = mysqli_query($conn,$sql);


    					}
    				}
    				else if($_POST['taskOption1']=="entry_number"){
                        if(isset($_POST['searchusers'])){
                            $sql = "SELECT * from user_info inner join authenticate on user_info.person_id = authenticate.person_id where entry_number = \"".$_POST['searchusers']."\"";
                            //echo $sql;
                            $result = mysqli_query($conn,$sql);
                        }


    				}
                    else if($_POST['taskOption1']=="first_name"){
                        if(isset($_POST['searchusers'])){
                            $sql = "SELECT * from user_info inner join authenticate on user_info.person_id = authenticate.person_id where first_name like '%".$_POST['searchusers']."%'";
                            //echo $sql;
                            $result = mysqli_query($conn,$sql);

                        }   

                    }

                    if(mysqli_num_rows($result)){
                        echo "<div class=\"table-responsive\" style=\"margin:5%\">";
                        echo "<table class=\"table\" id=\"myTable\">";
                        echo "<thead><tr>";
                        $count = 0;
                        echo "<th>#</th>";
                        echo "<th onclick=\"sortTable(0)\">Firstname</th>";
                        echo "<th onclick=\"sortTable(1)\">Lastname</th>";
                        echo "<th onclick=\"sortTable(2)\">Total Fine</th>";
                        echo "<th onclick=\"sortTable(3)\">E-mail</th>";
                        echo "<th>View Transactions</th>";
                        while($row = mysqli_fetch_assoc($result)){
                            $count = $count + 1;
                            echo "<tr>
                                    <td>".$count."</td>".
                                    "<td>".$row['first_name']."</td>".
                                    "<td>".$row['last_name']."</td>".
                                    "<td>".$row['total_fine']."</td>".
                                    "<td>".$row['email']."</td>".
                                    "<td>
                                       <div class=\"container-fluid\" onclick = \"myfunc6('".$row['person_id']."','s".$row['person_id']."')\" >
                                       <input type=\"button\"  name =\"clicked['".$row['person_id']."']\"  id=\"s".$row['person_id']."\" class=\"btn btn-default\" value=\"View Transactions\" style=\"border-color: #ccc; margin-right: 15px;\">
                                       </div>
                                    </td>

                                </tr>";        
                        }
                        echo "</tbody></ul></table></div>";
                    }

                    else{

                        echo "<h2 style=\"text-align:center;margin:5%\"> No Results Found.</h2>";
                    }
                }


			}
            echo "<form method=\"post\" action=\"adminLib.php\">
                   <center><div class=\"container-fluid\" style=\"\">
                   <input type=\"submit\" name =\"goback\"  id=\"goback\" class=\"btn btn-default\" value=\"Go back\" style=\"border-color: #ccc; margin-right: 15px;\">
                   </div></center>
                </form>";
            


		?>
        <style>
            th {
                cursor: pointer;
            }
        </style>
        <script>
                
            function myfunc3(book_id,person_id){
                if (confirm('Are you sure you want to send a mail?')) {
                    alert('mail will be sent shortly');
                    $.ajax({
                        url: "mailsender.php?book_id=" +book_id+"&person_id="+person_id,
                        success: function(result){
                            console.log(result);
                            alert('Email has been sent successfully');
                        } 
                    })

                }             
            }
        </script>
        <script>
            function sortTable(n) {
              var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
              table = document.getElementById("myTable");
              switching = true;
              //Set the sorting direction to ascending:
              dir = "asc"; 
              /*Make a loop that will continue until
              no switching has been done:*/
              while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.getElementsByTagName("TR");
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                  //start by saying there should be no switching:
                  shouldSwitch = false;
                  /*Get the two elements you want to compare,
                  one from current row and one from the next:*/
                  x = rows[i].getElementsByTagName("TD")[n+1];
                  y = rows[i + 1].getElementsByTagName("TD")[n+1];
                  console.log(x);
                  console.log(y);
                  /*check if the two rows should switch place,
                  based on the direction, asc or desc:*/
                  if(n==0|| n==1){
                      console.log(n);
                      if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                          //if so, mark as a switch and break the loop:
                          console.log("I'm here");
                          shouldSwitch= true;
                          break;
                        }
                      } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            console.log("I'm here");
                          //if so, mark as a switch and break the loop:
                          shouldSwitch= true;
                          break;
                        }
                      }
                    }
                    else{
                        if (dir == "asc") {
                        if (x.innerHTML > y.innerHTML) {
                          //if so, mark as a switch and break the loop:
                          shouldSwitch= true;
                          break;
                        }
                      } else if (dir == "desc") {
                        if (x.innerHTML < y.innerHTML) {
                          //if so, mark as a switch and break the loop:
                          shouldSwitch= true;
                          break;
                        }
                      }



                    }
                }
                if (shouldSwitch) {
                  /*If a switch has been marked, make the switch
                  and mark that a switch has been done:*/
                  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                  switching = true;
                  //Each time a switch is done, increase this count by 1:
                  switchcount ++;      
                } else {
                  /*If no switching has been done AND the direction is "asc",
                  set the direction to "desc" and run the while loop again.*/
                  if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                  }
                }
              }
            }
          </script>
          <script type = "text/javascript">
                // Get the 
                function myfunc(id,btnid,spanid){
                    console.log(id);
                    console.log(btnid);
                    console.log(spanid);
                    var modal = document.getElementById(id);

                    // Get the button that opens the modal
                    var btn = document.getElementById(btnid);

                    // Get the <span> element that closes the modal
                    var span = document.getElementById(spanid);

                    // When the user clicks the button, open the modal 
                    btn.onclick = function() {
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                }
            </script>
          <script>
            function myfunc6(person_id,btnid){
                //console.log("transactions.php?book_id="+book_id);
               
                $.ajax({
                    url: "transactions1.php?person_id="+person_id,
                    
                    success: function(result){
                        $("#tableModal").html("");
                        $("#tableModal").html(result +"<span class=close id=close>&times;</span>");
                }});
                myfunc("tableModal1",btnid,"close");

            }

            </script>

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
	</body>
</html>