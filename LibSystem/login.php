<?php
session_start();

if(isset($_POST['login'])){
	include_once("db.php");
	    $username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);
		
		$username = stripslashes($username);
		$password = stripslashes($password);
		
		$username = mysqli_real_escape_string($db, $username);
		$password = mysqli_real_escape_string($db, $password);
		
		/*$password = md5($password);*/
		
		$sql = "SELECT * FROM users WHERE username= '$username' LIMIT 1";
		$query = mysqli_query($db, $sql);
		$row = mysqli_fetch_array($query);
		$id = $row['id'];
	    $db_password = $row['password'];
		$admin = $row['admin'];
		
		if($password == $db_password){
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $id;
			if($admin == 1){
				$_SESSION['admin'] = 1;
			}
			header("Location: blog.php");
		} else{
			echo"Incorrect details  ";
		} 
}echo"new user?";
		$newuser = "<div><h3><a href='register.php'>Register</a></h3></div>";
		echo"$newuser";


?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<link rel="stylesheet" type="text/css" href="style1.css">
<body>

<div class="loginbox">
<img src="pic2.png" class="avatar">
<h1>login here</h1>
<form action="login.php" method="post" enctype="multipart/form-data">
	 <p>username</p>
     <input placeholder="Username" name="username" type="text" autofocus>
	 <p>password</p>
	 <input placeholder="Password" name="password" type="password" >
	 <input name="login" type="submit" value="Login">
</form>
</div>
</body>
</head>
</html>