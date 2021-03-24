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

    if(isset($_POST['update'])) {
        $i = $_POST['instruction'];
        $rep = $_POST['research-ext-pro'];
        $qa = $_POST['assurance'];
        $q = $_POST['quasi'];
        $lp = $_POST['lesson-prep'];
        $o = $_POST['others'];

        $sql = "UPDATE `wodesignation` SET `instruction`=$i,`research_ext_pro`=$rep,`quality_assurance`=$qa,`quasi`=$q,`lesson_prep`=$lp,`others`=$o WHERE rank_type = 'Proffesors'";

        if(mysqli_query($link, $sql)) {
            header("location: ../../../matrix.php");
        }
        else {
            echo "<div id='container'>";
            echo "<img id='vector' src='../../../../font/assets/vector/3567828.jpg'>";
            echo "NOTIFICATION: " .mysqli_error($link). ".";
            echo "<br><br>";
            echo "<a href='../../../matrix.php'><button type='button' id='btn-back'>Back to Registration</button></a>";
            echo "</div>";
        }
    }
?>