<!DOCTYPE html>
<?php
    session_start();

?>
<html lang="en">
<head>
    <style>
.form-control:focus{border-color: #5cb85c;  box-shadow: none; -webkit-box-shadow: none;} 
.has-error .form-control:focus{box-shadow: none; -webkit-box-shadow: none;}
</style>
  <title>signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src = "script.js"></script>
</head>
<body>

<div class="container">
  <h2>Add a book</h2>
  
    <form name="adding_books" action="" method="post" >
       <div class = "form-group col-sm-8">
          <label for="book name">Book name:</label>
          <input type="text" class="form-control" id="book_name" placeholder="Enter Book name **" name = "book_name" required>*
        </div>


        <div class = "form-group col-sm-8">
          <label for="Quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity **" name = "quantity" required>
        </div>


        <div class = "form-group col-sm-8">
            <label for="Sem_ref">Semester Reference:</label>
            <label><input type="radio" id="yes" name="yes" value=1>Yes</label>
            <label><input type="radio" id="yes" name="yes" value=0>No</label>
          
        </div>
        
        <div class = "form-group col-sm-8">
          <label for="reference number">Number of reference books:</label>
          <input type="number" class="form-control" id="reference_number" placeholder="Enter Quantity of reference books **" name = "reference_number" required>
        </div>

        <div class = "form-group col-sm-8">
          <label for="ISBN">ISBN(without any dashes):</label>
          <input type="number" class="form-control" id="ISBN" placeholder="Enter ISBN **" name = "ISBN" required>
        </div>

        <div class = "form-group col-sm-8">
          <label for="book_description">Book description:</label>
          <input type="text" class="form-control" id="book_description" placeholder="Enter book_description **" name = "book" required>  
        </div>

        <div class = "form-group col-sm-8">
          <label for="Author">Author:</label>
          <input type="text" class="form-control" id="author" placeholder="Enter Author **" name = "author" required>
        </div>

        <div class = "form-group col-sm-8">
          <label for="category">Category:</label>
            <select class="dropdown-new" id = "searchBy" style="margin-left:5px"name="category">
                <option value="Computer Science">Computer Science</option>
                <option value="Mech">Mech</option>
                <option value="Electrical">Electrical</option>
                <option value="English">English</option>
                <option value="Civil">Civil</option>
                <option value="Language">Language</option>
            </select>
<!--          <input type="text" class="form-control" id="category" placeholder="Enter category **" name = "category" required>-->
        </div>




        <div class = "form-group col-sm-8">       
          <button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
        </div>
        
    </form>

    <?php
      if(isset($_POST['submit'])){
        $_SESSION['book_name'] = $_POST['book_name'];
        $_SESSION['quantity'] = $_POST['quantity'];
        if(isset($_POST['yes'])){
          $_SESSION['sem_ref'] = $_POST['yes'];
        }
        $_SESSION['reference_number'] = $_POST['reference_number'];
        $_SESSION['ISBN'] = $_POST['ISBN'];
        if(isset($_POST['book'])){
          $_SESSION['book_description'] = $_POST['book'];
        }
        $_SESSION['author'] = $_POST['author'];
        $_SESSION['category'] = $_POST['category'];
        header('Location:adding_books.php');
      }
    ?>
</div>
    


</body>
</html>
