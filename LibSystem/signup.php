<?php
	@ob_start();
	session_start();

?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form with live validation</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  	

<form method="post">
  <h2>Sign Up</h2>
  		<p>
			<label for="firstname" class="floatLabel">First name</label>
			<input id="firstname" name="firstname" type="text"  required>
			<span id="firstspan"></span>
		</p>
		<p>
			<label for="lastname" class="floatLabel">Last name</label>
			<input id="lastname" name="lastname" type="text"  required>
			<span id="lastspan"></span>
		</p>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="Email" type="text"  required>
			<span id="emailspan"></span>
		</p>
		<p>
			<label for="Username" class="floatLabel">Username</label>
			<input id="username" name="username" type="text" onblur="checkusername()" required>
			<span id="usernamespan"></span>
		</p>
		<p>
			<label for="entry_number" class="floatLabel">Entry Number</label>
			<input id="entry_number" name="entry_number" type="text" required>
			<span id="entryspan"></span>
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" type="password" >
			<span>Enter a password longer than 8 characters</span>
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password">
			<span>Your passwords do not match</span>
		</p>
		
		<p>
			<input type="submit" name = "submit" value="Create My Account" id="submit">
		</p>
	</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>
  	function checkusername(){

  		var x = document.getElementById("username");
  		//console.log(x.value.length + "adsfadsfsda");
  		if(x.value.length==0){
			$("#usernamespan").html("Please enter the username"); 
			$("#usernamespan").css("display", "block"); 		
  		}
  		else{
			$("#usernamespan").html("");
			$("#usernamespan").css("display", "none");
			//console.log("asdfasdfadsfasdfawegfasdgarga");
			$.ajax({
                    url: "checkusername.php?username="+x.value,
                    
                    success: function(result){
                    	console.log(result + "result pls");
                        if(result=="1"){
                        	//console.log("gggggggg");
                        	$("#usernamespan").html("This user already exists"); 
                        	$("#usernamespan").css("display", "block");
                        }                     
                }});   		
  		}
  	}

  </script>
  <script  src="js/index.js"></script>
  <?php
  	if(isset($_POST['submit'])){
  		//echo "ajnfkjasdnfkjasndfjnjasjdfn";
  		$_SESSION['first_name'] = $_POST['firstname'];
  		$_SESSION['last_name'] = $_POST['lastname'];
  		$_SESSION['entry_number'] = $_POST['entry_number'];
  		$_SESSION['email'] = $_POST['Email'];
  		$_SESSION['password'] = $_POST['password'];
  		$_SESSION['repassword'] = $_POST['confirm_password'];
  		$_SESSION['username'] = $_POST['username'];
  		//echo "<script>alert('You will be added');</script>";
  		header("Location:register1.php");
  	}
  ?>


</body>

</html>
