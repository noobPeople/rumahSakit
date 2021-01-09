<?php
    $servername = "localhost:3307";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "rumahSakit";

    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

    if (!$conn) {
        die("connection failed: " . mysqli_connect_error());
    }
?>