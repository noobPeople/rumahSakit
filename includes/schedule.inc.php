<?php
    
    if (isset($_POST["submit-schedule"])) {
        
        $id = $_POST["id-schedule"];
        $dateSchedule = $_POST["date"];
        $daySchedule = $_POST["day-schedule"];
        $starttime = $_POST["starttime-schedule"];
        $endtime = $_POST["endtime-schedule"];
        $avail = $_POST["avail-schedule"];

        require_once 'dbh.inc.php';
        require_once 'schedule-functions.inc.php';

        if (idNotExist($conn, $id) === TRUE) {
            header("location: ../admin/monster-html/pages-blank.php?error=id Doesn't Exist");
            exit();
        }

        createSchedule($conn, $id, $dateSchedule, $daySchedule, $starttime, $endtime, $avail);

    } else {
        header("location: ../admin/monster-html/pages-blank.php");
        exit();
    }
?>