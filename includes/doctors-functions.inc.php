<?php
    
    function emailExists($conn, $email) {
        $sql = "SELECT * FROM doctors WHERE email_dokter = ?;";
        $stmt =  mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../admin/monster-html/doctors-page.php?error=stmtEmailError");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $email);
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

    function createDoctors($conn, $name, $email, $speciality, $phone, $city) {
        $sql = "INSERT INTO doctors (nama_dokter, email_dokter, spesialisasi, nomor_telepon, kota) VALUES (?, ?, ?, ?, ?);";
        $stmt =  mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../admin/monster-html/doctors-page.php?error=stmtError");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $speciality, $phone, $city);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        header("location: ../admin/monster-html/doctors-page.php?error=none");
        exit();
    }

?>