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

    $sql = "UPDATE user_books set date_return = '".date("Y/m/d")."' where person_id = ".$person_id." and book_id = ".$book_id;
    $result = mysqli_query($conn,$sql);
    $sql = "UPDATE book_info set quantity = quantity + 1 where book_id = ".$book_id;
    $result = mysqli_query($conn,$sql);
    echo "Successfully returned";
    //echo $sql;
?>