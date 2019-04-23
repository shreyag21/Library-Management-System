<?php
session_start();
include_once("db.php");
if(isset($_SESSION['id'])){
	header("Location: index.php");
    }
	
	if(isset($_POST['register'])){
		
		$username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);
		$password_confirm = strip_tags($_POST['password_confirm']);
		$email = strip_tags($_POST['email']);
		
		$username = stripslashes($username);
		$password = stripslashes($password);
		$password_confirm = stripslashes($password_confirm);
		$email = stripslashes($email);
		
		$username = mysqli_real_escape_string($db, $username);
		$password = mysqli_real_escape_string($db, $password);
		$password_confirm = mysqli_real_escape_string($db, $password_confirm);
		$email = mysqli_real_escape_string($db, $email);

		$sql_store = "INSERT into users (username,password,email) VALUES ('$username', '$password', '$email')";
		$sql_fetch_username = "SELECT username FROM users WHERE username = '$username' ";
		$sql_fetch_email = "SELECT email FROM users WHERE email ='$email' ";
		
		$query_username = mysqli_query($db, $sql_fetch_username);
		$query_email = mysqli_query($db, $sql_fetch_email);
		
		if(mysqli_num_rows($query_username)){
			echo "that name already exists";
			return;
		}
		
		if($username == ""){
			echo "please give some name";
			return;
		}
		
		if($password == "" || $password_confirm == ""){
			echo "please give some password";
			return;
		}

		if($password != $password_confirm){
			echo "passwords donot match";
			return;
		}
		
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)  || $email == ""){
			echo "invalid email";
			return;
		}
		
        if(mysqli_num_rows($query_email)){
			echo"email's already in use";
			return;
		}
		
		mysqli_query($db, $sql_store);
		
		header("Location: index.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>
<form action="register.php" method="post" enctype="multipart/form-data">
     <input placeholder="Username" name="username" type="text" autofocus>
	 <input placeholder="Password" name="password" type="password" >
	 <input placeholder="Confirm Password" name="password_confirm" type="password" >
	 <input placeholder="E-Mail Address" name="email" type="text" >
	 <input name="register" type="submit" value="Register">
</form>
</body>
</html>