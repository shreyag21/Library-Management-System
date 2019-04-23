<?php
session_start();

if(!isset($_SESSION['id'])){
	header("Location: login.php");
}
include_once("db.php")
?>

<!DOCTYPE html >
<html>
<head>
        <title>BLOG</title>
</head>
<body>
<?php
require_once("nbbc/nbbc.php");
$bbcode = new BBCode;
$pid = $_GET['pid'];
$sql = "SELECT * FROM posts WHERE id=$pid";
$res = mysqli_query($db,$sql) or die(mysql_error());

if(mysqli_num_rows($res) > 0) {
	
	while($row = mysqli_fetch_assoc($res)) {
		$id = $row[ 'id' ] ;
		$title = $row[ 'title'];
		$date = $row[ 'date' ];
		$content =$row['content'];
		
        if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1 ){
			$admin = "<div><a href ='del_post.php?pid=$id'>Delete</a>&nbsp;<a href='edit_post.php?pid=$id'>Reply</a></div>";	 
		} else{
			$admin = "";
		}
		
		$output = $bbcode->Parse($content);
		
		echo"<div><h2>$title</h2><h3>$date</h3><p>$output</p><p>$admin</p><hr /></div>";
	}
	
} else {
	echo "there are no posts to display";
}

?>

<a href="blog.php">Return</a>
</body>
</html>