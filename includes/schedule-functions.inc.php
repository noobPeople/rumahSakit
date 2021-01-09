<?php
    
    function idNotExist($conn, $id) {
        $sql = "SELECT * FROM doctors WHERE id_dokter = ?;";
        $stmt =  mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../admin/monster-html/pages-blank.php?error=stmtError");
            exit();
        }

        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            $result = TRUE;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createSchedule($conn, $id, $dateSchedule, $daySchedule, $starttime, $endtime, $avail) {
        $sql = "INSERT INTO schedule (idDoctors, dateSchedule, daySchedule, starttime, endtime, avail) VALUES (?, ?, ?, ?, ?, ?);";
        $stmt =  mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../admin/monster-html/pages-blank.php?error=stmtScheduleError");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ssssss", $id, $dateSchedule, $daySchedule, $starttime, $endtime, $avail);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        header("location: ../admin/monster-html/pages-blank.php?error=none");
        exit();
    }
?>