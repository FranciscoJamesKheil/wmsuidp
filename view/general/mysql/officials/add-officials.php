<?php
    session_start();

    $link = mysqli_connect("localhost", "root", "", "dbwmsuidp");
    if($link ===  false) {
        die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
    }

    if(isset($_POST['submit'])) {
        $firstname = $_POST['first-name'];
        $mi = $_POST['middle-initial'];
        $lastname = $_POST['last-name'];
        $position = $_POST['position'];
        $degree = $_POST['degree'];

        $sql = "INSERT INTO officials(officials_firstname, officials_lastname, officials_mi, officials_position, officials_degree) VALUES('$firstname', '$lastname', '$mi', '$position', '$degree')";

        if(mysqli_query($link, $sql))
            header("location: ../../officials.php");
        else
            echo "ERROR: Could not be able to execute $sql." .mysqli_error($link);
    }
?>