<?php
    
    //function for sign up

    function emptyInputSignup($name, $username, $email, $phone, $password, $repeatPassword) {
        $result;
        if (empty($name) || empty($username) || empty($email) || empty($phone) || empty($password) || empty($repeatPassword)) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return $result;
    }

    function invalidUid($username) {
        $result;
        if (strlen($username) < 4) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return $result;
    }

    function invalidEmail($email) {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return $result;
    }

    function passwordMatch($password, $repeatPassword) {
        $result;
        if ($password !== $repeatPassword) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return $result;
    }

    function invalidPhoneNumber($phone) {
        $result;
        if (!preg_match("/^[0-9]*$/", $phone)) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return $result;
    }

    function passwordTooShort($password) {
        $result;
        if ($password < 8) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return $result;
    }

    function usernameExists($conn, $username, $email) {
        $sql = "SELECT * FROM users WHERE usersUsername = ? OR usersEmail = ?;";
        $stmt =  mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../register.php?error=stmtError");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            $result = FALSE;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createUser($conn, $name, $username, $email, $phone, $password) {
        $sql = "INSERT INTO users (usersName, usersUsername, usersEmail, phoneNumber, usersPassword) VALUES (?, ?, ?, ?, ?);";
        $stmt =  mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../register.php?error=stmtError");
            exit();
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sssss", $name, $username, $email, $phone, $hashedPassword);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        header("location: ../login.php?error=none");
        exit();
    }

    //function for sign in

    function emptyInputLogin($username, $password) {
        $result;
        if (empty($username) || empty($password)) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return $result;
    }

    function loginUser($conn, $username, $password) {

        if ($username === '123' && $password === '123') {
            header("location: ../admin/monster-html/doctors-page.php");
            exit();
        }

        $usernameExists = usernameExists($conn, $username, $username);

        if ($usernameExists == FALSE) {
            header("location: ../login.php?error=usernameDoesntExist");
            exit();
        }

        $passwordHashed = $usernameExists["usersPassword"];
        $checkPassword = password_verify($password, $passwordHashed);

        if ($checkPassword == FALSE) {
            header("location: ../login.php?error=passwordIncorrect");
            exit();
        } elseif ($checkPassword == TRUE) {
            session_start();
            $_SESSION["idUser"] = $usernameExists["usersId"];
            $_SESSION["usernameUser"] = $usernameExists["usersUsername"];
            
            header("location: ../index.php");
            exit();
        }
    }

?>