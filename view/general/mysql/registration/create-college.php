 <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    #container {
        position: absolute;
        height: 100%; 
        width: 100%; 
        display: flex; 
        justify-content: center; 
        align-items:center; 
        font-size: 16px; 
        flex-direction: column;
    }
    #btn-back {
        cursor: pointer;
        padding: 5px 10px;
        background: rgb(160,0,0);
        border: none;
        outline-color: orange;
        color: white;
    }
    #btn-back:hover {
        box-shadow: 0px 0px 10px -2px rgb(90,90,90);
        background: white;
        color: rgb(160,0,0);
    }
    #vector {
        width: 15rem;
    }
</style>
<?php
	session_start();
    
	$link = mysqli_connect("localhost", "root", "", "dbwmsuidp");

	if($link === false) {
		die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
	}

    if(isset($_POST['submit'])){
        //path to store the college logo
        $target = "images/".basename($_FILES['image']['name']);

        /*college-table*/
        $image=$_FILES['image']['name'];
        $name=mysqli_real_escape_string($link, $_POST['college-name']);
        $date=mysqli_real_escape_string($link, $_POST['date-created']);

        $sqlcollege = "INSERT INTO college(college_logo, college_name, date_created) VALUES ('$image','$name','$date')";

        if(mysqli_query($link, $sqlcollege)) {
            //move uploaded logo to the folder
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
                echo "Logo uploaded successfully..";
            else 
                echo "There was a problem uploading the logo.";
            
            header("location: ./create-admin.php");
            $_SESSION['admin-name'] = $_POST['admin-name'];
            $_SESSION['admin-us'] = $_POST['admin-username'];
            $_SESSION['admin-pw'] = $_POST['admin-password'];
        }
        else {
            echo "<div id='container'>";
            echo "<img id='vector' src='../../../font/assets/vector/4565.jpg'>";
            echo "NOTIFICATION: College name was already used. (" .mysqli_error($link). ")";
            echo "<br><br>";
            echo "<a href='../../registration.php'><button type='button' id='btn-back'>Back to Registration</button></a>";
            echo "</div>";
        }
    }
?>