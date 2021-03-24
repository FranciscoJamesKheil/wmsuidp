<?php
    if(isset($_POST['submit'])){
	    $link = mysqli_connect("localhost", "root", "", "dbwmsuidp");
        
        $password = $_POST['general-password'];
        
        $sql = "UPDATE `users` SET `user_password`='$password' WHERE user_type = 'general';";

        if(mysqli_query($link, $sql)) {
            header("location: ../../profile.php");
        }
        else {
            echo "<div id='container'>";
            echo "<img id='vector' src='../../../font/assets/vector/4565.jpg'>";
            echo "NOTIFICATION: " .mysqli_error($link). ".";
            echo "<br><br>";
            echo "<a href='../../profile.php'><button type='button' id='btn-back'>Back to Registration</button></a>";
            echo "</div>";
        }
    }
    
?>