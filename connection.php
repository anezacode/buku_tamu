<?php
$log = "[Nez]";

$host = "localhost";
$username = "root";
$password = "";
$db = "sciencetech_guestbook";
$con = mysqli_connect($host, $username, $password, $db);

if (!$con) {
    error_log("\n" .$log. " GAGAL tersambung dengan database: " .$db);
} else {
    error_log("\n" .$log. " BERHASIL tersambung dengan database: " .$db);
}
?>