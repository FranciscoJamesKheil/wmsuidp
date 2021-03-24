<?php
    if(isset($_POST['submit'])){
        //path to store the profile img
        $target = "images/".basename($_FILES['image']['name']);

	    $link = mysqli_connect("localhost", "root", "", "dbwmsuidp");
        
        $image=$_FILES['image']['name'];
        
        $sql = "UPDATE `users` SET `user_profile_pic`='$image' WHERE user_type = 'general';";
        mysqli_query($link, $sql);

        //move uploaded profile to the folder
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo "Logo uploaded successfully..";
            header("location: ../../profile.php");
        }
        else 
            echo "There was a problem uploading the logo.";
    }
    
?>