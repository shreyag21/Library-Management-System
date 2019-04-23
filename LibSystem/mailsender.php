<?php
	

	$servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }

    mysqli_select_db($conn,'library'); 
?>

<?php

	$book_id = $_GET['book_id'];
	$person_id = $_GET['person_id'];
	$sql = "select * from user_books inner join user_info on user_info.person_id = user_books.person_id inner join book_info on user_books.book_id = book_info.book_id where user_books.book_id =".$book_id. " and user_books.person_id=".$person_id;
   // echo $sql;
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)){
		$to = $row['email'];
		$subject = "Regarding book return";
		$txt = "Dear ".$row['first_name']." ".$row['last_name'].",\n 	Please return ".$row['book_name']." As early as possible\n Thanking you";
		
		echo "everything set";
		mail($to, $subject, $txt, 'From: freak@freakzoid.com');
		echo "Mail send";
	}

?>