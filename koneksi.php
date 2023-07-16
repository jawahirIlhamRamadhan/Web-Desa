<?php
$con = mysqli_connect('localhost:3307', 'root', '', 'db_appsurat');
if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>