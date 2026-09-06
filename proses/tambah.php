<!-- // New Logic -->
<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $f = array_map(fn($v) => mysqli_real_escape_string($koneksi, $v), $_POST);

    // Logic Insert data ke database
    $query = "INSERT INTO testimoni (nama, kursus, isi) VALUES ('$f[nama]', '$f[kursus]', '$f[isi]')";
    mysqli_query($koneksi, $query);

    // Logic Redirect ke halaman testimoni
    header("Location: ../testimoni.php");
    exit;
}
?>