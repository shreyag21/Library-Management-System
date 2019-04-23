<?php
@ob_start();
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit1"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<script>alert('File is not an image.')</script>";
        header("refresh:0;url=userProfile.php");
        $uploadOk = 0;
    }
}
//// Check if file already exists
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<script>alert('Sorry, your file is too large.')</script>";
    
    $uploadOk = 0;
    header("refresh:0;url=userProfile.php");
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
    header("refresh:0;url=userProfile.php");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>alert('Sorry, your file was not uploaded.')</script>";
    header("refresh:0;url=userProfile.php");
// if everything is ok, try to upload file
} else {
//    echo "Fine lane " . $target_file . "<br>";
    $temp = (explode('.',$target_file,2));

    $target_file = "uploads/" . $_SESSION["userID1"] .".".$temp[1];
//    echo "Fine lane " . $target_file . "<br>";
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<script>alert('The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.')</script>";
        header("refresh:0;url=userProfile.php");
        
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        header("refresh:0;url=userProfile.php");
    }
}
?>