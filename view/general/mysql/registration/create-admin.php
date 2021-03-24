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
    //get from session
    $admin_name = $_SESSION['admin-name'];
    $admin_username = $_SESSION['admin-us'];
    $admin_password = $_SESSION['admin-pw'];
    
    //view
    $sql = "SELECT * FROM college";

    $myData = mysqli_query($link,$sql);
    while($record = mysqli_fetch_array($myData)) { 
        $cid = $record['college_id'];
    }
    $sqladmin = "INSERT INTO users(college_id_fk, user_type, user_name, user_username, user_password) VALUES ($cid, 'admin', '$admin_name', '$admin_username','$admin_password')";

    if(mysqli_query($link, $sqladmin)) {
        header("location: ../../registration.php");
    }
    else {
        echo "<div id='container'>";
        echo "<img id='vector' src='../../../font/assets/vector/4565.jpg'>";
        echo "NOTIFICATION: Username was already used. " .mysqli_error($link). ".";
        echo "<br><br>";
        echo "<a href='../../registration.php'><button type='button' id='btn-back'>Back to Registration</button></a>";
        echo "</div>";
    }
	mysqli_close($link);
?>