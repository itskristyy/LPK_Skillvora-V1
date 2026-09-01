<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "db_skillvora";

// buat koneksi ke db
$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
