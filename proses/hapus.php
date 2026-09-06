<?php
// Memuat file koneksi database dari folder induk (../koneksi.php) agar variabel $koneksi dapat digunakan
include '../koneksi.php';

// Memeriksa apakah parameter 'id' dikirimkan melalui URL (metode GET)
if (isset($_GET['id'])) {
    // Mengambil nilai 'id' dari URL dan mengonversinya ke tipe integer (angka bulat) demi mengamankan query dari SQL Injection
    $id = (int) $_GET['id'];
    
    // Menyusun sintaks SQL DELETE untuk menghapus baris data pada tabel 'testimoni' yang memiliki kolom 'id' sesuai variabel $id
    $query = "DELETE FROM testimoni WHERE id = $id";
    
    // Menjalankan/mengesekusi perintah SQL $query ke database menggunakan koneksi $koneksi
    mysqli_query($koneksi, $query);
}

// Mengalihkan (redirect) browser kembali ke halaman testimoni.php yang ada di folder induk (../testimoni.php)
header("Location: ../testimoni.php");

// Menghentikan eksekusi script PHP secara penuh setelah perintah redirect dipanggil
exit;

