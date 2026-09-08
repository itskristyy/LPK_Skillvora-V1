<?php
// Menghubungkan program dengan database
include '../koneksi.php';

// Mengecek apakah ID data dikirim melalui URL
if (isset($_GET['id'])) {

    // Mengambil ID dari URL dan mengubahnya menjadi angka
    $id = (int) $_GET['id'];

    // Membuat perintah untuk menghapus data testimoni berdasarkan ID
    $query = "DELETE FROM testimoni WHERE id = $id";

    // Menjalankan perintah hapus ke database
    mysqli_query($koneksi, $query);
}

// Setelah data dihapus, kembali ke halaman testimoni
header("Location: ../testimoni.php");

// Menghentikan program
exit;
?>