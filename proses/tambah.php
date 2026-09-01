<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama   = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kursus = mysqli_real_escape_string($koneksi, $_POST['kursus']);
    $isi    = mysqli_real_escape_string($koneksi, $_POST['isi']);

    $query = "INSERT INTO testimoni (nama, kursus, isi) VALUES ('$nama', '$kursus', '$isi')";
    mysqli_query($koneksi, $query);
}

header("Location: ../testimoni.php");
exit;
