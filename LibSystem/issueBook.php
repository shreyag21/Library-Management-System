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
    $issuedBookByUserSql = "SELECT COUNT(*) as count FROM user_books WHERE date_return IS NULL and person_id = ".$person_id;
    $issuedBookByUserResult = mysqli_query($conn, $issuedBookByUserSql);
    $fetchReslt = mysqli_fetch_assoc($issuedBookByUserResult);
    if ($fetchReslt['count'] < 4){
        $count_book = "SELECT quantity , reference_number FROM book_info WHERE book_id = ". $book_id;
        $countBookResult = mysqli_query($conn, $count_book);
        if (mysqli_num_rows($countBookResult) > 0) {
            $Date = date('Y-m-d');
            $Date1 = date('Y-m-d', strtotime($Date. ' + 15 days'));
            $row = mysqli_fetch_assoc($countBookResult);
            if ($row['quantity'] > $row['reference_number']){
                $newQuantity = $row['quantity'] -1 ;
                $issueSql = "INSERT INTO user_books (person_id, book_id,fine, date_withdrawn,for_semester,due_date) VALUES (". $person_id .", ". $book_id .", 0, CURRENT_DATE ,0,15)";

                if (mysqli_query($conn, $issueSql)){
                    $reduceQuantitySql = "UPDATE book_info SET quantity = ". $newQuantity. " WHERE book_id = " .    $book_id ;
                    $reduceQuantityResult = mysqli_query($conn, $reduceQuantitySql);
                    echo "1";
                }else{
                    echo "2";
    //                echo "<script>alert('Sorry there was some problem and your book Cannot be issued')</script>";
                }

            }else{
                echo "3";
    //            echo "<script>alert('Sorry There are no books left to issue. You can read this book as reference in library ')</script>";
    //            header("refresh:0;url=userLib.php");
            }


        }
    }else{
        echo "4";
}
                                        
?>