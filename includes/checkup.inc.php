<?php
    
    if (isset($_POST["submit"])) {

        session_start();
        
        $id_user = $_SESSION["idUser"];
        $paket = $_POST["paket"];
        $tanggal = $_POST["tanggal"];
        $pesan = $_POST["pesan"];
    
        require_once 'dbh.inc.php';
    
        function createCheckup($conn, $id_user, $paket, $tanggal, $pesan) {
            $sql = "INSERT INTO checkup (id_user, paket, tanggal, pesan) VALUES (?, ?, ?, ?);";
            $stmt =  mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../checkup.php?error=stmtError");
                exit();
            }
    
            mysqli_stmt_bind_param($stmt, "isss", $id_user, $paket, $tanggal, $pesan);
            mysqli_stmt_execute($stmt);
    
            mysqli_stmt_close($stmt);
    
            header("location: ../checkup.php?error=none");
            exit();
        }
    
        createCheckup($conn, $id_user, $paket, $tanggal, $pesan);
    
    } else {
        header("location: ../checkup.php");
        exit();
    }

?>