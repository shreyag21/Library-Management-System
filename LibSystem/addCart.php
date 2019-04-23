<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    mysqli_select_db($conn,'library');
    $book_id = $_GET['book_id'];
    $person_id = $_GET['person_id'];
    $checkIfAlreadyExistSql = "SELECT * FROM cart_books WHERE book_id = ". $book_id. " and person_id = ". $person_id;
    $checkIfAlreadyExistSqlResult = mysqli_query($conn, $checkIfAlreadyExistSql);
    if( mysqli_num_rows($checkIfAlreadyExistSqlResult) == 0){
        $issueSql = "INSERT INTO cart_books (person_id, book_id,date_added) VALUES (". $person_id .", ". $book_id .", CURRENT_DATE )";
        if (mysqli_query($conn, $issueSql)){
            echo "1";
//            echo "<script>alert('Your BooK has been added to cart')</script>";
        }else{
            echo "2";
        }
    }else{
        echo "3";
    }

?>
                                            
                                        