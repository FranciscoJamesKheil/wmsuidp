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
    if($link ===  false) {
        die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
    }

    if(isset($_POST['submit'])) {
        $release_time = $_POST['release-time'];
        $research = $_POST['research-ext-pro'];
        $admin_function = $_POST['admin-function'];
        $instruction = $_POST['instruction'];
        $quasi = $_POST['quasi'];
        $lesson = $_POST['lesson-prep'];
        $others = $_POST['others'];

        $sql = "INSERT INTO wdesignation(release_time, research_ext_pro, admin_function, instruction, quasi, lesson_prep, others) VALUES($release_time, $research, $admin_function, $instruction, $quasi, $lesson, $others)";

        if(mysqli_query($link, $sql))
            header("location: ../../matrix.php");
        else {
            echo "<div id='container'>";
            echo "<img id='vector' src='../../../font/assets/vector/3567828.jpg'>";
            echo "NOTIFICATION: Release Time was already used. " .mysqli_error($link). ".";
            echo "<br><br>";
            echo "<a href='../../matrix.php'><button type='button' id='btn-back'>Back to Matrix</button></a>";
            echo "</div>";
        }
    }
?>