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
        $nan = $_POST['new-admin-name'];
        $nau = $_POST['new-admin-un'];
        $nap = $_POST['new-admin-pw'];
        $cid = $_POST['college-id'];
        $ncl = $_POST['new-college-logo'];
        $ncn = $_POST['new-college-name'];

        $sql = "UPDATE `users` SET `user_name`='$nan',`user_username`='$nau',`user_password`='$nap' WHERE user_type='admin' AND college_id_fk = $cid";
        $sqlCollege = $ncl!=NULL? "UPDATE `college` SET `college_logo`='$ncl',`college_name`='$ncn' WHERE college_id = $cid" : "UPDATE `college` SET `college_name`='$ncn' WHERE college_id = $cid";

        if(mysqli_query($link, $sql) && mysqli_query($link, $sqlCollege))
            header("location: ../../../registration.php");
        else {
            echo "<div id='container'>";
            echo "<img id='vector' src='../../../../font/assets/vector/3567828.jpg'>";
            echo "NOTIFICATION: " .mysqli_error($link). ".";
            echo "<br><br>";
            echo "<a href='../../../registration.php'><button type='button' id='btn-back'>Back to Registration</button></a>";
            echo "</div>";
        }
    }
?>