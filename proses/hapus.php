<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM testimoni WHERE id = $id");
}

header("Location: ../testimoni.php");
exit;
