<?php
    if(isset($_POST['submit'])){
        //path to store the college logo
        $target = "images/".basename($_FILES['image']['name']);

	    $link = mysqli_connect("localhost", "root", "", "dbimage");
        /*college-table*/
        $image=$_FILES['image']['name'];
        
        $sql = "INSERT INTO images(image) VALUES('$image')";
        mysqli_query($link, $sql);

        //move uploaded logo to the folder
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
            echo "Logo uploaded successfully..";
        else 
            echo "There was a problem uploading the logo.";
    }
    
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./image.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <p>Upload profile</p>
        <input type="file" name="image">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>