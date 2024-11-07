<?php
require_once 'connection.php';

if (isset($_POST['role'])) {
    $status = $_POST['role'];

    if ($status == "SISWA") {
        $username = htmlspecialchars(strtoupper($_POST['username-siswa']));
        $grade = $_POST['level'] . ' ' . $_POST['jurusan'] . ' ' . $_POST['nomor'];
        $message = $_POST['input-kp1'];
        $query = "INSERT INTO tb_student (username, grade, status, message, time) VALUES ('$username', '$grade', '$status', '$message', CURRENT_TIMESTAMP)";
    } elseif ($status == "GURU") {
        $username = htmlspecialchars(strtoupper($_POST['username-guru']));
        $jabatan = $_POST['jabatan'];
        $query = "INSERT INTO tb_teacher (username, jabatan, status, time) VALUES ('$username', '$jabatan', '$status', CURRENT_TIMESTAMP)";
    } elseif ($status == "PENGUNJUNG") {
        $username = htmlspecialchars(strtoupper($_POST['username-pengunjung']));
        $query = "INSERT INTO tb_visitor (username, status, time) VALUES ('$username', '$status', CURRENT_TIMESTAMP)";
    } else {
        exit;
    }

    $hasil = mysqli_query($con, $query);
    if (!$hasil) {
        echo $log. " KESALAHAN dalam memasukkan data: " . mysqli_error($con);
        exit;
    }
}

header('location:index.php');
?>
