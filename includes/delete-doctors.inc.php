<?php
    include_once 'dbh.inc.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM doctors WHERE id_dokter=$id;";

    mysqli_query($conn, $sql);
    header("location: ../admin/monster-html/doctors-page.php");
    exit();
?>