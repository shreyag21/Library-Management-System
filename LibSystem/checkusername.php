<?php


	$servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }

    mysqli_select_db($conn,'library'); 

    $username = $_GET['username'];

    $sql = "select * from authenticate where user_name = '".$username."'";
    //echo $sql."<br>";
    $result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		echo "1";
	}
	else{
		echo "2";
	}

   
?>