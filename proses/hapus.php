<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    // Logic Ambil id dari parameter GET
    $id = (int) $_GET['id'];
    // Logic Hapus data berdasarkan id 
    $query = "DELETE FROM testimoni WHERE id = $id";
    mysqli_query($koneksi, $query);
}

// Logic Redirect ke halaman testimoni
header("Location: ../testimoni.php");
exit;
