<?php
// Memuat file koneksi database dari folder induk (../koneksi.php) agar variabel $koneksi dapat digunakan
include '../koneksi.php';

// Memeriksa apakah request yang masuk menggunakan metode POST (form telah dikirim/submit)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengamankan seluruh nilai data dari input $_POST terhadap karakter berbahaya (SQL Injection) menggunakan array_map
    $f = array_map(fn($v) => mysqli_real_escape_string($koneksi, $v), $_POST);

    // Menyusun perintah SQL INSERT untuk memasukkan data nama, kursus, dan isi ke dalam tabel 'testimoni'
    $query = "INSERT INTO testimoni (nama, kursus, isi) VALUES ('$f[nama]', '$f[kursus]', '$f[isi]')";
    
    // Mengeksekusi/menjalankan perintah SQL $query ke database via koneksi $koneksi
    mysqli_query($koneksi, $query);

    // Mengalihkan (redirect) browser kembali ke halaman testimoni.php di folder induk (../testimoni.php)
    header("Location: ../testimoni.php");
    
    // Menghentikan eksekusi script PHP secara lengkap setelah pengalihan halaman dipanggil
    exit;
}
?>