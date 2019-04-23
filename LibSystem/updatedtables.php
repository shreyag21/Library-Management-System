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
            //echo "Before all the isset<br\>";
            $book_id = $_GET['book_id'];
            $person_id = $_GET['person_id'];
            writeTables($book_id,$person_id,$conn);
                    
			function writeTables($book_id,$person_id,$conn){
		    $sql = "select * from user_books inner join user_info on user_info.person_id = user_books.person_id inner join book_info on user_books.book_id = book_info.book_id where user_books.book_id =".$book_id. " and user_books.person_id=".$person_id." and date_return is null";
		    //echo $sql;
		    //echo $sql."<br>";
		    $result = mysqli_query($conn,$sql);
		    if(mysqli_num_rows($result)){
		        echo "<div class=\"table-responsive\" style=\"margin:5%\">";
		        echo "<table class=\"table\" id=\"myTable1\">";
		        echo "<thead><tr>";
		        echo "<th>#</th>";
		        echo "<th onclick=\"sortTable(0,'myTable1')\">First name</th>";
		        echo "<th onclick=\"sortTable(1,'myTable1')\">Last name</th>
		                <th onclick=\"sortTable(2,'myTable1')\">Fine on this book</th>
		                <th onclick=\"sortTable(3,'myTable1')\">E-mail</th>
		                <th onclick=\"sortTable(4,myTable1')\">Date-withrawn</th>
		                <th onclick=\"sortTable(5,'myTable1')\">Date-Due</th>
		                <th> Return Book </th>
		                </tr></thead><tbody>";
		        $count = 0;
		        while($row = mysqli_fetch_assoc($result)){
		            echo "<tr>
		                    <td>".$count."</td>".
		                    "<td>".$row['first_name']."</td>".
		                    "<td>".$row['last_name']."</td>".
		                    "<td>".$row['fine']."</td>".
		                    "<td>".$row['email']."</td>".
		                    "<td>".$row['date_withdrawn']."</td>".
		                    "<td>".$row['due_date']."</td>".
		                    "<td>".
		                        "<div class=\"container-fluid\" onclick=\"myfunc4('".$row['book_id']."','".$row['person_id']."')\">
		                               <input type=\"button\"  name = \"toemail\"  id=\"e".$row['book_id']."\" class=\"btn btn-default\" value=\"Return book\" style=\"border-color: #ccc; margin-right: 15px;\">
		                         </div>
		                     </td>".
		                 "</tr>";
		            $count = $count + 1;
		        }
		        echo "</tbody></ul></table></div>";
		    }
		    else{
		        echo "<h2 style=\"text-align:center;margin:5%\"> No books to return.</h2>";
		    }
		}
		
		?>