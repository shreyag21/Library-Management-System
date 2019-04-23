<!DOCTYPE html>
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
    <form action="#" method="post">
    <select name="Color[]" multiple> // Initializing Name With An Array
    <option value="Red">Red</option>
    <option value="Green">Green</option>
    <option value="Blue">Blue</option>
    <option value="Pink">Pink</option>
    <option value="Yellow">Yellow</option>
    </select>
    <input type="submit" name="submit" value="Get Selected Values" />
    </form>
            <?php
            if(isset($_POST['submit'])){
            
                foreach ($_POST['Color'] as $select)
                {
                echo "You have selected :" .$select;
                }
            }
            ?>  
</body>
</html> 