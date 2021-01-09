<?php

if (isset($_POST["submit"])) {

    session_start();
    
    $id_user = $_SESSION["idUser"];
    $id_jadwal = $_POST["jadwal"];
    $gejala = $_POST["gejala"];
    $pesan = $_POST["pesan"];

    require_once 'dbh.inc.php';

    function createAppointment($conn, $id_user, $id_jadwal, $gejala, $pesan) {
        $sql = "INSERT INTO appointment (id_user, id_jadwal, gejala, pesan) VALUES (?, ?, ?, ?);";
        $stmt =  mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../buat-janji.php?error=stmtError");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "iiss", $id_user, $id_jadwal, $gejala, $pesan);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        header("location: ../doctor-search.php?error=none");
        exit();
    }

    createAppointment($conn, $id_user, $id_jadwal, $gejala, $pesan);

} else {
    header("location: ../buat-janji.php");
    exit();
}

?>