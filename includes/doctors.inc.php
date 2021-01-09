<?php
    
    if (isset($_POST["submit-doctors"])) {
        
        $name = $_POST["fullName"];
        $email = $_POST["email"];
        $speciality = $_POST["speciality"];
        $phone = $_POST["phone"];
        $city = $_POST["city"];

        require_once 'dbh.inc.php';
        require_once 'doctors-functions.inc.php';

        if (emailExists($conn, $email) != FALSE) {
            header("location: ../admin/monster-html/doctors-page.php?error=EmailExists");
            exit();
        }
        
        createDoctors($conn, $name, $email, $speciality, $phone, $city);

    } else {
        header("location: ../admin/monster-html/doctors-page.php");
        exit();
    }

?>