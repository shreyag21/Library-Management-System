<?php
	session_start();
?>

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

	$author_id = 0;
	$category_id = 0;
	$book_id = 0;
	$ref_books = $_SESSION['reference_number'];
	$books = $_SESSION['quantity'];


	mysqli_select_db($conn,'library');

		$sql = "select * from book_info where ISBN=".$_SESSION['ISBN'];
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) == 0) {
			$sql1 = "INSERT INTO book_info(book_name,quantity,is_sem,reference_number,ISBN,book_description) values('".$_SESSION['book_name']."',".$_SESSION['quantity'].",".$_SESSION['sem_ref'].",".$_SESSION['reference_number'].",".$_SESSION['ISBN'].",'".$_SESSION['book_description']."')";
			//echo $sql1."<br>";
			$result1 = mysqli_query($conn,$sql1);

			$sql10 = "select * from book_info where ISBN=".$_SESSION['ISBN'];
			$result10 = mysqli_query($conn,$sql10);

			while($row = mysqli_fetch_assoc($result10)){
				$book_id = $row['book_id'];

			}

			$sql2 = "select * from author where author_name = '".$_SESSION['author']."'";
			//echo $sql2."<br>";
			$result2 = mysqli_query($conn,$sql2);

			if(mysqli_num_rows($result2) == 0) {

				$sql3 = "INSERT INTO author(author_name) values('".$_SESSION['author']."')";
//				echo $sql3."<br>";
				$result3 = mysqli_query($conn,$sql3);


				$sql2 = "select * from author where author_name = '".$_SESSION['author']."'";
//				echo $sql2."<br>";
				$result2 = mysqli_query($conn,$sql2);


				while($row = mysqli_fetch_assoc($result2)) {
                	$author_id = $row['author_id']; 	   
                }
                
			}

			else{
				
				while($row = mysqli_fetch_assoc($result2)) {
                	$author_id = $row['author_id']; 	   
                }

			}

			$sql5 = "select * from category_info where category_name = '".$_SESSION['category']."'";
			//echo $sql5."<br>";
			$result5 = mysqli_query($conn, $sql5);

			if(mysqli_num_rows($result5)==0){

				$sql6 = "INSERT INTO category_info(category_name) values('".$_SESSION['category']."')";
				//echo $sql6."<br>";
				$result6 = mysqli_query($conn,$sql6);


				$sql5 = "select * from category_info where category_name = '".$_SESSION['category']."'";
				//echo $sql5."<br>";
				$result5 = mysqli_query($conn, $sql5);

				while($row = mysqli_fetch_assoc($result5)){
					$category_id = $row['category_id'];
				}
			}

			else{
				while($row = mysqli_fetch_assoc($result5)){
					$category_id = $row['category_id'];
				}	
			}

			$sql8 = "INSERT INTO book_category(book_id,category_id) values(".$book_id.",".$category_id.")";
			//echo $sql8."<br>";
			$result8 = mysqli_query($conn,$sql8);

			$sql9 = "INSERT INTO book_author(book_id,author_id) values(".$book_id.",".$author_id.")";
			//echo $sql9."<br>";
			$result9 = mysqli_query($conn,$sql9);
		}

		else{
			while($row = mysqli_fetch_assoc($result)){
				$books = $books + $row['quantity'];
				$ref_books = $ref_books + $row['reference_number'];
			}

			$sql = "INSERT INTO book_info(quantity,reference_number) values(".$books.",".$ref_books.") where ISBN = ".$_SESSION['ISBN'];
			$result = mysqli_query($conn,$sql);

			$sql5 = "select * from category_info where category_name = '".$_SESSION['category']."'";
			//echo $sql5."<br>";
			$result5 = mysqli_query($conn, $sql5);

		}
		header("Refresh:0; url=adminLib.php");
		echo "<script>alert('The book has been added :\)');</script>";
// 				$sql4 = "select * from book_info where ISBN=".$_SESSION['ISBN'];
// 				$result4 = mysqli_query($conn, $sql);

// 				while($row=mysqli_fetch_assoc($result4)){
// 					$book_id = $row['book_id'];
// 				}
?>