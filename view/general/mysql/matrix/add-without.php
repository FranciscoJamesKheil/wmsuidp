<?php
    session_start();

    $link = mysqli_connect("localhost", "root", "", "dbwmsuidp");
    if($link ===  false) {
        die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
    }

    if(isset($_POST['submit'])) {
        $rank_type = $_POST['rank-type'];
        $instruction = $_POST['instruction-wo'];
        $research = $_POST['research-ext-pro-wo'];
        $assurance = $_POST['assurance-wo'];
        $quasi = $_POST['quasi-wo'];
        $lesson = $_POST['lesson-prep-wo'];
        $others = $_POST['others-wo'];

        $sql = "INSERT INTO wodesignation(rank_type, instruction, research_ext_pro, quality_assurance, quasi, lesson_prep, others) VALUES('$rank_type', $instruction, $research, $assurance, $quasi, $lesson, $others)";

        if(mysqli_query($link, $sql))
            header("location: ../../matrix.php");
        else
            echo "ERROR: Could not be able to execute $sql." .mysqli_error($link);
    }
?>