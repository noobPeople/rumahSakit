<?php
    include_once 'dbh.inc.php';

    $id = $_GET['id'];
    $sql = "UPDATE checkup SET status_checkup = 'queue' WHERE id_checkup = $id;";

    mysqli_query($conn, $sql);
    header("location: ../admin/monster-html/checkup-page.php");
    exit();
?>