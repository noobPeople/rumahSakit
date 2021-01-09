<?php
    
    if(isset($_POST["submit"])) {
        
        echo "Berhasill";
        
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $repeatPassword = $_POST["repeatpassword"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputSignup($name, $username, $email, $phone, $password, $repeatPassword) != FALSE) {
            header("location: ../register.php?error=emptyinput");
            exit();
        }
        if (invalidUid($username) != false) {
            header("location: ../register.php?error=invalidusername");
            exit();
        }
        if (invalidEmail($email) != false) {
            header("location: ../register.php?error=invalidEmail");
            exit();
        }
        if (invalidPhoneNumber($phone) != false) {
            header("location: ../register.php?error=invalidPhoneNumber");
            exit();
        }
        if (passwordTooShort($password) != false) {
            header("location: ../register.php?error=passwordTooShort");
            exit();
        }
        if (passwordMatch($password, $repeatPassword) != false) {
            header("location: ../register.php?error=passwordDoesntMatch");
            exit();
        }
        if (usernameExists($conn, $username, $email) != false) {
            header("location: ../register.php?error=usernameIsExists");
            exit();
        }
        
        createUser($conn, $name, $username, $email, $phone, $password);

    } else {
        header("location: ../register.php");
        exit();
    }
?>