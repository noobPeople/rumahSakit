<?php
    include_once 'dbh.inc.php';

    $id = $_GET['id'];
    $sql = "UPDATE schedule SET avail = 'available' WHERE idSchedule = $id;";

    mysqli_query($conn, $sql);
    header("location: ../admin/monster-html/pages-blank.php");
    exit();
?>