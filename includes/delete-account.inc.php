<?php
    include_once 'dbh.inc.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE usersId=$id;";

    mysqli_query($conn, $sql);
    header("location: ../admin/monster-html/table-basic.php");
    exit();
?>